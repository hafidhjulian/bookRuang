<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_pdf extends CI_Model {

	public function get_produk($where,$table)
	{
        return $this->db->get_where($table,$where);
	}
}
?>