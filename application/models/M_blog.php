<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_blog extends CI_Model {

	public function GetBlog()
	{
		$blog = $this->db->query('SELECT * FROM blog;');
        return $blog;
	}
    
    public function GetBlogSingle($id){
        $single = $this->db->select('*')
                            ->from('blog')
                            ->where('id', $id)
                            ->get();
        return $single;
    }
}
