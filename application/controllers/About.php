<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class About extends CI_Controller {
    
    function __construct(){
        parent:: __construct();
    $this->load->model('m_about');
        }

	public function index()
	{
        $data['about'] = $this->m_about->GetAbout();
		$this->template->load('static','about',$data);
	}
}
