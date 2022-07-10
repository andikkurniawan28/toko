<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Pelanggan_Model extends CI_Model {

	public function getDataPelangganAll()
    {
        return $this->db->query("select * from `data_pelanggan`");
    }

}
