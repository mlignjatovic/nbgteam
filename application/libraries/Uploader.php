<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Uploader {

    protected $CL;

    public function __construct () {
        $this->CL =& get_instance();
    }

    public function uploadImage($post_id) {
        if (($this->CL->input->post('submit-update') || $this->CL->input->post('submit-insert')) && !empty($_FILES['images']['name'])) {
                    #ukupan broj slika
                $filesCount = count($_FILES['images']['name']);
            for ($i = 0; $i < $filesCount; $i++) {
                    $_FILES['image']['name'] = $_FILES['images']['name'][$i];
                    $_FILES['image']['type'] = $_FILES['images']['type'][$i];
                    $_FILES['image']['tmp_name'] = $_FILES['images']['tmp_name'][$i];
                    $_FILES['image']['error'] = $_FILES['images']['error'][$i];
                    $_FILES['image']['size'] = $_FILES['images']['size'][$i];

                    $config['upload_path'] = './uploads';
                    $config['allowed_types'] = 'gif|jpg|png';
                    $config['max_size']     = '5000';

                    $this->CL->load->library('upload',$config);

                    if (!$this->CL->upload->do_upload('image')){
                            echo $this->CL->upload->display_errors();
                    }else {
                            $file = $this->CL->upload->data();
                            #podaci za bazu
                            $uploadData[$i]['image_path'] = base_url().'uploads/'.$file['file_name'];
                            $uploadData[$i]['image_name'] = $file['full_path'];
                            $uploadData[$i]['post_id'] = $post_id;
                    }
            }//end for loop
                    #upisivanje podataka slike u  bazu
                    if (!empty($uploadData)) {
                         $this->CL->load->model('images');
                         $this->CL->images->insertImages($uploadData);
                    }
        }//end main if

    }//end upload_image
}
