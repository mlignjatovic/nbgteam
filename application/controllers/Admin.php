<?php

class Admin extends CI_Controller {

      function __construct () {
          parent::__construct();
          if (!$this->session->userdata('logged_in') || !$this->session->userdata('logged_in')) {
			redirect('/login');
		}
      }

      public function index() {
          $this->load->library("pagination");
          #lokalna podesavanja paginacija || generalna podesavanja u config/pagination.php
          $config['base_url'] = base_url().'admin/index';
          $config['total_rows'] = $this->db->get('posts')->num_rows();
          $config['per_page'] = 3;
          $this->pagination->initialize($config);
          #setOffset metodu sam napisao u MY_Pagination
          $offset = $this->pagination->setOffset($this->uri->segment(3),$config['per_page']);
                            #poziv metode iz -> models/Posts.php
          $data['posts'] = $this->posts->getAllPosts($config['per_page'],$offset);
          $data['page'] = 'admin/postlist_view';
          $this->load->view('layout/main',$data);
      }
      #da ne bih ponavljao isti kod vise puta, ova metoda prihvata i logiku za update posta
      public function addPost() {
          $this->session->set_flashdata('mode', 'insert');
          #mora bar jedan od dva zahteva da bude poslat
         if ($this->input->post('submit-insert') || $this->input->post('submit-update')) {
                $post_title = $this->input->post('title');
                $post_text = $this->input->post('post');
                #ako zahtev dolazi sa stranice za novi post
            if ($this->input->post('submit-insert')) {
                $this->posts->insertPost($post_title,$post_text);
                $this->session->set_flashdata('post-message', 'Uspesno ste dodali novi clanak!');
                #ako zahtev dolazi sa stranice za editovanje posta
            }elseif($this->input->post('submit-update')) {
                $post_id = $this->input->post('edit-post_id');
                $this->posts->updatePost($post_id,$post_title,$post_text);
                $this->session->set_flashdata('post-message', 'Uspesno ste editovali clanak!');
            }
                if (!empty($_FILES['images']['name'])) {
                    #ovde uzimam ID trenutnog posta kako bih povezao slike i post -> controllers/Posts.php
                    $post_id = $this->posts->lastPostId();
                    #napravio sam biblioteku za upload -> libraries/Uploader.php
                    $this->load->library('uploader');
                    $this->uploader->uploadImage($post_id);

                }
                redirect('/administracija');
        }
          $data['page'] = 'admin/post_view';
          $this->load->view('layout/main',$data);
      }
      #ova metoda prikazuje stranicu za editovanje posta
      public function editPost($post_id) {
          $this->session->set_flashdata('mode', 'edit');
          if (isset($post_id) && is_numeric($post_id)) {
              $data['edit'] = $this->posts->getOnePost($post_id);
              $data['images'] = $this->images->getImages($post_id);
          }
          $data['page'] = 'admin/post_view';
          $this->load->view('layout/main',$data);
      }

      public function deletePost($post_id) {
          if (isset($post_id) && is_numeric($post_id)) {
              #metoa za brisanje svih slika povezanih sa postom -> models/Images.php
              $this->images->deleteAllImages($post_id);
              $this->posts->deletePost($post_id);
          }
            redirect('/administracija');
      }

      public function deleteImage() {
          if ($this->input->post('delete-image')) {
                #putanja za brisanje fizickog fajla
                $imagePath = $this->input->post('image-name');
                #id slike za brisanje iz baze
                $image_id = $this->input->post('image-id');
                #id posta kako bi se posle brisanja slike vratili na istu stranicu
                $post_id = $this->input->post('post-id');
                if (!($imagePath && strlen($imagePath)) ||
                    !($image_id && is_numeric($image_id)) ||
                    !($post_id && is_numeric($post_id))) {
                    echo "not valid parameters";
                }else {
                    #poziv metode iz  -> models/Images.php
                    $this->images->deleteImage($image_id,$imagePath);
                    redirect("/administracija/edituj-clanak/{$post_id}");
                }
          }
      }

      public function logout() {
            $this->load->model('users');
            $this->users->logout();
      }


}
