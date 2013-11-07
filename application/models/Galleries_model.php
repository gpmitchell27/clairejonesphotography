<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Galleries_model extends CI_Model {

	 public function __construct() {
        parent::__construct();
    }

    
    public function record_count() {
        
        $this->db->count_all_results();
    }
 
    public function fetch_nature_thumbnails($limit, $start) {
        $category = 1;
		$this->db->limit($limit, $start);
        $query = $this->db->get_where("thumbnails", array("category" => $category));
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

   public function fetch_wildlife_thumbnails($limit, $start) {
        $category = 2;
        $this->db->limit($limit, $start);
        $query = $this->db->get_where("thumbnails", array("category" => $category));
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

   public function fetch_wedding_thumbnails($limit, $start) {
        $category = 3;
        $this->db->limit($limit, $start);
        $query = $this->db->get_where("thumbnails", array("category" => $category));
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

   public function fetch_portrait_thumbnails($limit, $start) {
        $category = 4;
        $this->db->limit($limit, $start);
        $query = $this->db->get_where("thumbnails", array("category" => $category));
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }

   public function fetch_landscape_thumbnails($limit, $start) {
        $category = 5;
        $this->db->limit($limit, $start);
        $query = $this->db->get_where("thumbnails", array("category" => $category));
 
        if ($query->num_rows() > 0) {
            foreach ($query->result() as $row) {
                $data[] = $row;
            }
            return $data;
        }
        return false;
   }
}