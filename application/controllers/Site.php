<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->cekApakahUserSudahLogin();
    }

    public function cekApakahUserSudahLogin()
    {
        if($this->session->userdata('status') != 'login')
            redirect(base_url('auth'));
    }

	public function index()
	{
        $data['page_title'] = 'Home';

		$this->load->view('static/header', $data);
		$this->load->view('site/home');
		$this->load->view('static/footer');
	}
}
