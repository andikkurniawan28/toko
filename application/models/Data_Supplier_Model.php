<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Supplier_Model extends CI_Model {

	public function getDataSupplierAll()
    {
        return $this->db->query("select * from `data_supplier`");
    }

    public function createSupplier($nama_supplier, $alamat, $telepon)
    {
        $this->db->query("insert into `data_supplier` (`nama_supplier`, `alamat`, `telepon`) values ('$nama_supplier', '$alamat', '$telepon')");
    }

    public function deleteSupplier($kode_supplier)
    {
        $this->db->query("delete from `data_supplier` where `kode_supplier` = $kode_supplier");
    }

    public function updateSupplier($kode_supplier, $nama_supplier, $alamat, $telepon)
    {
        $this->db->query("update `data_supplier` set 
            `nama_supplier`='$nama_supplier',
            `alamat`='$alamat',
            `telepon`='$telepon'");
    }

}
