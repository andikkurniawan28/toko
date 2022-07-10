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

    public function dataSupplier()
    {
        $data['page_title'] = 'Data Supplier';

		$this->load->view('static/header', $data);
		$this->load->view('static/footer');
    }

    public function dataPelanggan()
    {
        $this->load->model('Data_Pelanggan_Model');

        $data['page_title'] = 'Data Pelanggan';
        $data['table']      = $this->Data_Pelanggan_Model->getDataPelangganAll();

		$this->load->view('static/header', $data);
		$this->load->view('master/dataPelanggan', $data);
		$this->load->view('static/footer');
    }

    public function dataProduk()
    {
        $data['page_title'] = 'Data Produk';

		$this->load->view('static/header', $data);
		$this->load->view('static/footer');
    }

    public function dataPengguna()
    {
        $this->load->model('Data_Pengguna_Model');

        $data['page_title'] = 'Data Pengguna';
        $data['table']      = $this->Data_Pengguna_Model->getDataPenggunaAll();

		$this->load->view('static/header', $data);
		$this->load->view('master/dataPengguna', $data);
		$this->load->view('static/footer');
    }
}
