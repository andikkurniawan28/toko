<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Produk_Model extends CI_Model {

	public function getDataProdukAll()
    {
        return $this->db->query("select * from `data_produk`");
    }

}
