<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Supplier extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('Data_Supplier_Model');
    }

    public function tambahSupplier()
    {
        $nama_supplier  = $this->input->post('nama_supplier', TRUE);
        $alamat         = $this->input->post('alamat');
        $telepon        = $this->input->post('telepon');

        $this->Data_Supplier_Model->createSupplier($nama_supplier, $alamat, $telepon);
        $this->session->set_flashdata('message', "<div class='alert alert-success' role='alert'>Data supplier berhasil ditambahkan.</div>");
        redirect(base_url('site/dataSupplier'));
    }

    public function hapusSupplier($kode_supplier)
    {
        $this->Data_Supplier_Model->deleteSupplier($kode_supplier);
        $this->session->set_flashdata('message', "<div class='alert alert-success' role='alert'>Data supplier berhasil dihapus.</div>");
        redirect(base_url('site/dataSupplier'));
    }

    public function editSupplier()
    {
        $kode_supplier  = $this->input->post('kode_supplier', TRUE);
        $nama_supplier  = $this->input->post('nama_supplier', TRUE);
        $alamat         = $this->input->post('alamat', TRUE);
        $telepon        = $this->input->post('telepon', TRUE);

        $this->Data_Supplier_Model->updateSupplier($kode_supplier, $nama_supplier, $alamat, $telepon);
        $this->session->set_flashdata('message', "<div class='alert alert-success' role='alert'>Data supplier berhasil diubah.</div>");
        redirect(base_url('site/dataSupplier'));
    }
}
