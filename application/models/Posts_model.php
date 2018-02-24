<?php
class Posts_model extends CI_Model{
    
    public function __construct()
    {
            parent::__construct();
    }
    public function get_posts($slug = FALSE)
    {
        if ($slug === FALSE) {
            $qury = $this->db->get('posts');
            $result = $qury->result_array();
            return $result; 
        }
        $qury = $this->db->get_where('posts', array('slug'=>$slug));
        $row = $qury->row();
        return $row; 
    }
    public function get_post($limit, $offset)
    {
        $this->db->select('*');
        $this->db->limit($limit);
        $q = $this->db->get('posts', $offset);
        $r = $q->result_array();

        return $r;
    }
}