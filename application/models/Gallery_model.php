<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Gallery_model extends CI_Model {

	public function getAll(){
		$this->load->database();
    	$query = $this->db->get('thumbnails');
    		if($query->num_rows() > 0){
    			foreach($query->result() as $row) {
    				$data[] = $row;
    			}
            return $data;
    		}
    }
}