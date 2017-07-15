<?php

class Blog extends CI_Controller {

  public function index() {

      $this->load->library("pagination");
      #lokalna podesavanja paginacija || generalna podesavanja u config/pagination.php
      $config['base_url'] = base_url().'blog/index';
      $config['total_rows'] = $this->db->get('posts')->num_rows();
      $config['per_page'] = 3;
      $this->pagination->initialize($config);
      #setOffset metodu sam napisao u MY_Pagination
      $offset = $this->pagination->setOffset($this->uri->segment(3),$config['per_page']);
                            #poziv metode iz -> models/Posts.php
      $data['post_list'] = $this->posts->getAllPosts($config['per_page'],$offset);
      $data['page'] = 'postlist_view';
      $this->load->view('layout/main',$data);
  }

  public function login() {
      $this->load->model('users');
      if ($this->input->post('submit-login')) {
          #metoda iz models/Users.php
          $this->users->login();
      }
      $data['page'] = 'login_view';
      $this->load->view('layout/main',$data);
  }

  public function post($post_id) {
      if (isset($post_id) && is_numeric($post_id)) {
          $data['post'] = $this->posts->getOnePost($post_id);
          $data['images'] = $this->images->getImages($post_id);
      }
      $data['page'] = 'post_view';
      $this->load->view('layout/main',$data);
  }
}
