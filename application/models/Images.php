<?php

class Images extends CI_Model {

    public function insertImages($data = []) {
        $insert = $this->db->insert_batch('images',$data);
    }

    public function deleteImage($image_id,$imagePath) {
        #brisanje iz baze
        $this->db->where('image_id', $image_id);
        $query = $this->db->delete('images');
        #brisanje fizickog fajla
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
    }

    public function deleteAllImages($post_id) {
        $images = $this->getImages($post_id);
        #brisaje svih slika vezanih za post iz baze
        foreach ($images as $image) {
            if (file_exists($image->image_name)) {
                unlink($image->image_name);
            }
        }
        #brisanje svih slika vezanih za post
        $this->db->where('post_id', $post_id);
        $query = $this->db->delete('images');
    }

    public function getImages($post_id) {
        $this->db->where('post_id',$post_id);
        $query = $this->db->get('images');
            return $query->result();
    }
}
