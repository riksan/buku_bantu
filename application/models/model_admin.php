<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Model_admin extends CI_Model {

	
	public function tampil_pensiun()
	{
		return $this->db->get('tbl_pensiun');
	}

	
/*
	public function edit_jenis($id)
	{
		return $this->db->get_where('tb_jenis_surat',array('jenis_id'=>$id));
	}
*/
	
	public function hapus_pensiun($id)
	{
		return $this->db->delete('tbl_pensiun', array('id_pensiun' => $id));
	}

	/*ukp ma*/
	public function tampil_ukpma()
	{
		return $this->db->get('tbl_ukpma');
	}

	public function hapus_ukpma($id)
	{
		return $this->db->delete('tbl_ukpma', array('id_ukpma' => $id));
	}

	/*ukp bkn*/
	public function tampil_ukpbkn()
	{
		return $this->db->get('tbl_ukpbkn');
	}

	public function hapus_ukpbkn($id)
	{
		return $this->db->delete('tbl_ukpbkn', array('id_ukpbkn' => $id));
	}

	/*cpns*/
	public function tampil_cpns()
	{
		return $this->db->get('tbl_cpns');
	}

	public function hapus_cpns($id)
	{
		return $this->db->delete('tbl_cpns', array('id_cpns' => $id));
	}
}
