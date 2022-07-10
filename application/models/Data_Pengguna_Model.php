<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Pengguna_Model extends CI_Model {

	public function getDataPenggunaAll()
    {
        return $this->db->query("select * from `data_pengguna`");
    }

}
