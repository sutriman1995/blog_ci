<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_about extends CI_Model {

	public function GetAbout()
	{
		$about = $this->db->query('SELECT * FROM about;');
        return $about;
	}
}
