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
        $this->load->model('Data_Supplier_Model');

        $data['page_title'] = 'Data Supplier';
        $data['table']      = $this->Data_Supplier_Model->getDataSupplierAll();

		$this->load->view('static/header', $data);
		$this->load->view('master/dataSupplier', $data);
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
        $this->load->model('Data_Produk_Model');

        $data['page_title'] = 'Data Produk';
        $data['table']      = $this->Data_Produk_Model->getDataProdukAll();

		$this->load->view('static/header', $data);
		$this->load->view('master/dataProduk', $data);
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
