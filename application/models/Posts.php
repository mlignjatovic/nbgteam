<?php

class Posts extends CI_Model{

      public function getAllPosts($perPage,$offset = 0) {
          $this->db->order_by('post_date','desc');
          $query = $this->db->get('posts',$perPage,$offset);
                return $query->result();
      }

      public function getOnePost($post_id) {
          $this->db->where('post_id',$post_id);
          $query = $this->db->get('posts');
                return $query->row();
      }

      public function insertPost($post_title,$post_text) {
          $data = [
              'post_title'=> $post_title,
              'post_text' => $post_text
          ];
          $this->db->insert('posts',$data);
      }

      public function updatePost($post_id,$post_title,$post_text) {
        $data = [
            'post_title' => $post_title,
            'post_text' => $post_text,
            'post_date' => date('Y-m-d H:i:s')
        ];
        $this->db->where('post_id', $post_id);
        $this->db->update('posts', $data);

      }

      public function deletePost($post_id) {
            $this->db->where('post_id', $post_id);
            $this->db->delete('posts');
      }

      public function lastPostId () {
            $this->db->select('*');
            $this->db->from('posts');
            $this->db->order_by('post_date','desc');
            $this->db->limit(1);
            $query = $this->db->get();
            $postId =  $query->first_row();
                return $postId->post_id;
      }


}
