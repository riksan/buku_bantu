<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	function index(){
		
		$a['pensiun']	= $this->model_admin->tampil_pensiun()->num_rows();
		$a['ukpma']		= $this->model_admin->tampil_ukpma()->num_rows();
		$a['ukpbkn']	= $this->model_admin->tampil_ukpbkn()->num_rows();
		$a['cpns']		= $this->model_admin->tampil_cpns()->num_rows();
		$a['page']		= "home";
		
		$this->load->view('admin/index', $a);
	}
	
	function __construct(){
		parent::__construct();
		$this->load->helper(array('url','form'));
		$this->load->model('model_admin');
	}


	

	/* Fungsi Pensiun */
	function pensiun(){
		$a['data']	= $this->model_admin->tampil_pensiun()->result_object();
		$a['page']	= "pensiun/pensiun";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_pensiun(){
		$a['page']	= "pensiun/tambah_pensiun";
		
		$this->load->view('admin/index', $a);
	}

	function insert_pensiun(){
		
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$no_surat = $this->input->post('no_surat');
		$tanggal_surat = $this->input->post('tanggal_surat');
		$tanggal_kirim = $this->input->post('tanggal_kirim');
		$unit_kerja = $this->input->post('unit_kerja');
		$object = array(
				
				'nama' => $nama,
				'nip' => $nip,
				'no_surat' => $no_surat,
				'tanggal_surat' => $tanggal_surat,
				'tanggal_kirim' => $tanggal_kirim,
				'unit_kerja' => $unit_kerja
			);
		$this->db->insert('tbl_pensiun', $object);

		redirect('index.php/admin/pensiun','refresh');
	}

	function edit_pensiun($id){
		$a['editdata']	= $this->db->get_where('tbl_pensiun',array('id_pensiun'=>$id))->result_object();		
		$a['page']	= "pensiun/edit_pensiun";
		
		$this->load->view('admin/index', $a);
	}

	function update_pensiun(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$no_surat = $this->input->post('no_surat');
		$tanggal_surat = $this->input->post('tanggal_surat');
		$tanggal_kirim = $this->input->post('tanggal_kirim');
		$unit_kerja = $this->input->post('unit_kerja');
		$object = array(
				'nama' => $nama,
				'nip' => $nip,
				'no_surat' => $no_surat,
				'tanggal_surat' => $tanggal_surat,
				'tanggal_kirim' => $tanggal_kirim,
				'unit_kerja' => $unit_kerja
			);
		$this->db->where('id_pensiun', $id);
		$this->db->update('tbl_pensiun', $object); 

		redirect('index.php/admin/pensiun','refresh');
	}


	function hapus_pensiun($id){
		
		$this->model_admin->hapus_pensiun($id);
		redirect('index.php/admin/pensiun','refresh');
	}

	/*UKP MA*/
	function ukpma(){
		$a['data']	= $this->model_admin->tampil_ukpma()->result_object();
		$a['page']	= "ukp_ma/ukpma";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_ukpma(){
		$a['page']	= "ukp_ma/tambah_ukpma";
		
		$this->load->view('admin/index', $a);
	}

	function insert_ukpma(){
		
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$no_surat_asal = $this->input->post('no_surat_asal');
		$no_surat_tujuan = $this->input->post('no_surat_tujuan');
		$tanggal = $this->input->post('tanggal');
		$pangkat_asal = $this->input->post('pangkat_asal');
		$pangkat_usul = $this->input->post('pangkat_usul');
		$jabatan = $this->input->post('jabatan');
		$satuan_kerja = $this->input->post('satuan_kerja');
		$keterangan = $this->input->post('keterangan');
		$object = array(
				
				'nama' => $nama,
				'nip' => $nip,
				'no_surat_asal' => $no_surat_asal,
				'no_surat_tujuan' => $no_surat_tujuan,
				'tanggal' => $tanggal,
				'pangkat_asal' => $pangkat_asal,
				'pangkat_usul' => $pangkat_usul,
				'jabatan' => $jabatan,
				'satuan_kerja' => $satuan_kerja,
				'keterangan' => $keterangan
			);
		$this->db->insert('tbl_ukpma', $object);

		redirect('index.php/admin/ukpma','refresh');
	}

	function edit_ukpma($id){
		$a['editdata']	= $this->db->get_where('tbl_ukpma',array('id_ukpma'=>$id))->result_object();		
		$a['page']	= "ukp_ma/edit_ukpma";
		
		$this->load->view('admin/index', $a);
	}

	function update_ukpma(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$no_surat_asal = $this->input->post('no_surat_asal');
		$no_surat_tujuan = $this->input->post('no_surat_tujuan');
		$tanggal = $this->input->post('tanggal');
		$pangkat_asal = $this->input->post('pangkat_asal');
		$pangkat_usul = $this->input->post('pangkat_usul');
		$jabatan = $this->input->post('jabatan');
		$satuan_kerja = $this->input->post('satuan_kerja');
		$keterangan = $this->input->post('keterangan');
		$object = array(
				'nama' => $nama,
				'nip' => $nip,
				'no_surat_asal' => $no_surat_asal,
				'no_surat_tujuan' => $no_surat_tujuan,
				'tanggal' => $tanggal,
				'pangkat_asal' => $pangkat_asal,
				'pangkat_usul' => $pangkat_usul,
				'jabatan' => $jabatan,
				'satuan_kerja' => $satuan_kerja,
				'keterangan' => $keterangan
			);
		$this->db->where('id_ukpma', $id);
		$this->db->update('tbl_ukpma', $object); 

		redirect('index.php/admin/ukpma','refresh');
	}


	function hapus_ukpma($id){
		
		$this->model_admin->hapus_ukpma($id);
		redirect('index.php/admin/ukpma','refresh');
	}

	/*UKP Dirgen BKN*/
	function ukpbkn(){
		$a['data']	= $this->model_admin->tampil_ukpbkn()->result_object();
		$a['page']	= "ukp_bkn/ukpbkn";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_ukpbkn(){
		$a['page']	= "ukp_bkn/tambah_ukpbkn";
		
		$this->load->view('admin/index', $a);
	}

	function insert_ukpbkn(){
		
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$no_surat_asal = $this->input->post('no_surat_asal');
		$no_surat_tujuan = $this->input->post('no_surat_tujuan');
		$tanggal = $this->input->post('tanggal');
		$pangkat_asal = $this->input->post('pangkat_asal');
		$pangkat_usul = $this->input->post('pangkat_usul');
		$jabatan = $this->input->post('jabatan');
		$satuan_kerja = $this->input->post('satuan_kerja');
		$keterangan = $this->input->post('keterangan');
		$object = array(
				
				'nama' => $nama,
				'nip' => $nip,
				'no_surat_asal' => $no_surat_asal,
				'no_surat_tujuan' => $no_surat_tujuan,
				'tanggal' => $tanggal,
				'pangkat_asal' => $pangkat_asal,
				'pangkat_usul' => $pangkat_usul,
				'jabatan' => $jabatan,
				'satuan_kerja' => $satuan_kerja,
				'keterangan' => $keterangan
			);
		$this->db->insert('tbl_ukpbkn', $object);

		redirect('index.php/admin/ukpbkn','refresh');
	}

	function edit_ukpbkn($id){
		$a['editdata']	= $this->db->get_where('tbl_ukpbkn',array('id_ukpbkn'=>$id))->result_object();		
		$a['page']	= "ukp_bkn/edit_ukpbkn";
		
		$this->load->view('admin/index', $a);
	}

	function update_ukpbkn(){
		$id = $this->input->post('id');
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$no_surat_asal = $this->input->post('no_surat_asal');
		$no_surat_tujuan = $this->input->post('no_surat_tujuan');
		$tanggal = $this->input->post('tanggal');
		$pangkat_asal = $this->input->post('pangkat_asal');
		$pangkat_usul = $this->input->post('pangkat_usul');
		$jabatan = $this->input->post('jabatan');
		$satuan_kerja = $this->input->post('satuan_kerja');
		$keterangan = $this->input->post('keterangan');
		$object = array(
				'nama' => $nama,
				'nip' => $nip,
				'no_surat_asal' => $no_surat_asal,
				'no_surat_tujuan' => $no_surat_tujuan,
				'tanggal' => $tanggal,
				'pangkat_asal' => $pangkat_asal,
				'pangkat_usul' => $pangkat_usul,
				'jabatan' => $jabatan,
				'satuan_kerja' => $satuan_kerja,
				'keterangan' => $keterangan
			);
		$this->db->where('id_ukpbkn', $id);
		$this->db->update('tbl_ukpbkn', $object); 

		redirect('index.php/admin/ukpbkn','refresh');
	}


	function hapus_ukpbkn($id){
		
		$this->model_admin->hapus_ukpbkn($id);
		redirect('index.php/admin/ukpbkn','refresh');
	}

	/*usul CPNS jadi PNS*/

	function cpns(){
		$a['data']	= $this->model_admin->tampil_cpns()->result_object();
		$a['page']	= "cpns/cpns";
		
		$this->load->view('admin/index', $a);
	}

	function tambah_cpns(){
		$a['page']	= "cpns/tambah_cpns";
		
		$this->load->view('admin/index', $a);
	}

	function insert_cpns(){
		
		$nama = $this->input->post('nama');
		$nip = $this->input->post('nip');
		$golongan = $this->input->post('golongan');
		$satuan_kerja = $this->input->post('satuan_kerja');
		$no_surat = $this->input->post('no_surat');
		$tanggal_surat = $this->input->post('tanggal_surat');
		$keterangan = $this->input->post('keterangan');
		
		$object = array(
				
				'nama' => $nama,
				'nip' => $nip,
				'golongan' => $golongan,
				'satuan_kerja' => $satuan_kerja,
				'no_surat' => $no_surat,
				'tanggal_surat' => $tanggal_surat,
				'keterangan' => $keterangan
			);
		$this->db->insert('tbl_cpns', $object);

		redirect('index.php/admin/cpns','refresh');
	}

	function edit_cpns($id){
		$a['editdata']	= $this->db->get_where('tbl_cpns',array('id_cpns'=>$id))->result_object();		
		$a['page']	= "cpns/edit_cpns";
		
		$this->load->view('admin/index', $a);
	}

	function update_cpns(){
		$id 			= $this->input->post('id');
		$nama 			= $this->input->post('nama');
		$nip 			= $this->input->post('nip');
		$golongan 		= $this->input->post('golongan');
		$satuan_kerja 	= $this->input->post('satuan_kerja');
		$no_surat 		= $this->input->post('no_surat');
		$tanggal_surat 	= $this->input->post('tanggal_surat');
		$keterangan 	= $this->input->post('keterangan');
		
		$object = array(
				
				'nama' 			=> $nama,
				'nip' 			=> $nip,
				'golongan' 		=> $golongan,
				'satuan_kerja' 	=> $satuan_kerja,
				'no_surat' 		=> $no_surat,
				'tanggal_surat' => $tanggal_surat,
				'keterangan' 	=> $keterangan
			);
		$this->db->where('id_cpns', $id);
		$this->db->update('tbl_cpns', $object); 

		redirect('index.php/admin/cpns','refresh');
	}


	function hapus_cpns($id){
		
		$this->model_admin->hapus_cpns($id);
		redirect('index.php/admin/cpns','refresh');
	}
}

