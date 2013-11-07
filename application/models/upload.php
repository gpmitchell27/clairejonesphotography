<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class upload extends CI_Model {

	public function upload() {
		$config = array(
            'allowed_types' => 'jpg|png|bmp', 
            'upload_path'=>'./images1/', //make sure you have this folder
            'max_size'=>2000
        );

        $this->load->library('upload',$config);

        if ($this->upload->do_upload()) {
            echo "Upload success!";
        } else {
            echo "Upload failed!";
        }
    	$image_data = $this->upload->data();
    }  

	function get_images() {
        $query = $this->db->get('animalstore');
        return $query;
    }

	function Save_gallery($in) {
	$save=$this->db->insert('animalstore',$in);
	return $save;
	}

}