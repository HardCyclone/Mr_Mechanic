<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {    
    
    function __construct() {
        parent::__construct();

        $this->load->model('partner_model');
        $this->load->model('cart_model');
    }

	public function index(){    
        $id = $this->session->userdata('id_member');

        $push = [
            "pageTitle" => "Home"
        ];  

        $push["data"] = $this->partner_model->get_items()->result();
        $push["count"] = $this->cart_model->count_qty($id)->row();
        
		$this->template->load(template().'/template',template().'/content',$push); 
	}
}
