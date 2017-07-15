<?php
/*
* U zadatku niste trazili registracionu formu pa sam rucno ubacio korisnika u bazu i ovde samo vrsim validaciju.
* Lozinku sam kriptovao php funkcijom password_hash() sa PASSWORD_BCRYPT  algoritmom.
*/
class Users extends CI_Model {

    public function login() {
        $this->load->library('form_validation');

        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');
        if (!$this->form_validation->run()) {
            redirect('/login');
        }else{
            $user_email = $this->input->post('email');
            $password = $this->input->post('password');
            #privatna metoda iz ove klase
            if ($this->checkCredentials($user_email,$password)) {
                $this->session->set_userdata('logged_in',true);
                $this->session->set_userdata('email',$user_email);
                $this->session->set_userdata('username',$this->getUser($user_email)->user_name);
                redirect('/administracija');
            }else {
                redirect('/login');
            }
        }
    }

    private function checkCredentials($user_email,$password) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('user_email',$user_email);
        $query = $this->db->get();
        #ako ne postoji korisnik sa ovim emailom
        if ($query->num_rows() != 1) {
            $this->session->set_flashdata('login-error','Nepostojeca email adresa!');
            $out = false;
        }else {
            #ako postoji,uzimamo taj red iz baze i proveravamo mu lozinku
            $row = $query->row();
            if (!password_verify($password,$row->user_password)) {
                $this->session->set_flashdata('login-error','Pogresna lozina!');
                $out = false;
            }else {
                $out = true;
            }
    }
        return $out;
    }

    private function getUser($user_email) {
        $this->db->where('user_email',$user_email);
        $query = $this->db->get('users');
            return $query->row();
    }

    public function logout(){
        $this->session->unset_userdata('logged_in');
        $this->session->unset_userdata('email');
        $this->session->unset_userdata('username');
        $this->session->sess_destroy();
        redirect('/');
    }
}
