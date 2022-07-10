<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_Supplier_Model extends CI_Model {

	public function getDataSupplierAll()
    {
        return $this->db->query("select * from `data_supplier`");
    }

}
