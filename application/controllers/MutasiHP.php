<?php
class MutasiHP  extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Model_MutasiHP');
 
	}

	function index(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			if($this->model_user_access->access_access() == 1){

				$tgl_awal 	= addslashes($this->input->post('tgl_awal'));
				$tgl_akhir 	= addslashes($this->input->post('tgl_akhir'));
				$id_group 	= $this->session->userdata('id_group');

				$for_tgl_awal = date('Y-m-d', strtotime($tgl_awal));
        		$for_tgl_akhir = date('Y-m-d', strtotime($tgl_akhir));
				

				if(!empty($tgl_awal)){
					
					$data_real = $this->db->query("SELECT * FROM mutasi_produksi WHERE cast(activation_date as date) BETWEEN '$for_tgl_awal' AND '$for_tgl_akhir' ")->result();
					
				}else{

					$data_real	= $this->Model_MutasiHP->tampil_data()->result();
				}
				
				$data = array('contents' => 'Dashboard/MutasiHP/index',
						  'data' => $data_real
							);
				$this->load->view('Layouts/warper', $data);
			}else{
				$this->load->view('Layouts/error-404');
			}
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function export_excel(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			if($this->model_user_access->access_access() == 1){

				$tgl_awal 	= addslashes($this->input->post('tgl_awal'));
				$tgl_akhir 	= addslashes($this->input->post('tgl_akhir'));
				$id_group 	= $this->session->userdata('id_group');

				$for_tgl_awal = date('Y-m-d', strtotime($tgl_awal));
        		$for_tgl_akhir = date('Y-m-d', strtotime($tgl_akhir));
				

				if(!empty($tgl_awal)){
					
					$data_real = $this->db->query("SELECT * FROM mutasi_produksi WHERE cast(activation_date as date) BETWEEN '$for_tgl_awal' AND '$for_tgl_akhir' ")->result();
					
				}else{

					$data_real	= $this->Model_MutasiHP->tampil_data()->result();
				}

				$data = array(
							
			                'data'	=> $data_real
				);


					header("Content-type: application/octet-stream");
					header("Content-Disposition: attachment; filename=Rekap_Mutasi_Hasil_Produksi.xls");
					header("Pragma: no-cache"); 
					header("Expires: 0");

					$this->load->view('Dashboard/MutasiHP/excel', $data);

			}else{
				$this->load->view('Layouts/error-404');
			}
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function add(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			if($this->model_user_access->access_add() == 1){
				$data = array('contents' => 'Dashboard/MutasiHP/add');
				$this->load->view('Layouts/warper', $data);
			}else{
				$this->load->view('Layouts/error-404');
			}
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function add_action(){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			if($this->model_user_access->access_add() == 1){
				$po_number = addslashes($this->input->post('po_number'));
				$kode_barang = addslashes($this->input->post('kode_barang'));
				$nama_barang = addslashes($this->input->post('nama_barang'));
				$satuan = addslashes($this->input->post('satuan'));
				$saldo_awal = addslashes($this->input->post('saldo_awal'));
				$pemasukan = addslashes($this->input->post('pemasukan'));
				$pengeluaran = addslashes($this->input->post('pengeluaran'));
				$saldo_akhir = addslashes($this->input->post('saldo_akhir'));
				$gudang = addslashes($this->input->post('gudang'));
		 
		 
				$data = array(
							'po_number' => $po_number,
							'kode_barang' => $kode_barang,
							'nama_barang' => $nama_barang,
							'satuan' => $satuan,
							'saldo_awal' => $saldo_awal,
							'pemasukan' => $pemasukan,
							'pengeluaran' => $pengeluaran,
							'saldo_akhir' => $saldo_akhir,
							'gudang' => $gudang
							);

							
							
				$this->Model_MutasiHP->input_data($data,'mutasi_produksi');

				$this->session->set_flashdata('succeed', 'Data baru telah di simpan.');
				redirect('MutasiHP');
			}else{
				$this->load->view('Layouts/error-404');
			}
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function delete($id){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			if($this->model_user_access->access_delete() == 1){
				$where = array('id_mutasi_produksi' => $id);
				$this->Model_MutasiHP->hapus_data($where,'mutasi_produksi');

				$this->session->set_flashdata('succeed', 'Satu data telah di hapus.');
				redirect('MutasiHP');
			}else{
				$this->load->view('Layouts/error-404');
			}
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function edit($id){
		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			if($this->model_user_access->access_edit() == 1){
				$where = array('id_mutasi_produksi' => $id);
				$data = array( 	'contents' => 'Dashboard/MutasiHP/edit',
								'data' => $this->Model_MutasiHP->edit_data($where,'mutasi_produksi')->row()
								);
				$this->load->view('Layouts/warper', $data);
			}else{
				$this->load->view('Layouts/error-404');
			}
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

	public function update($id){

		if($this->session->userdata('name_user') and $this->session->userdata('username')){
			if($this->model_user_access->access_edit() == 1){

				$po_number = addslashes($this->input->post('po_number'));
				$kode_barang = addslashes($this->input->post('kode_barang'));
				$nama_barang = addslashes($this->input->post('nama_barang'));
				$satuan = addslashes($this->input->post('satuan'));
				$saldo_awal = addslashes($this->input->post('saldo_awal'));
				$pemasukan = addslashes($this->input->post('pemasukan'));
				$pengeluaran = addslashes($this->input->post('pengeluaran'));
				$saldo_akhir = addslashes($this->input->post('saldo_akhir'));
				$gudang = addslashes($this->input->post('gudang'));
		 
		 
				$data = array(
							'po_number' => $po_number,
							'kode_barang' => $kode_barang,
							'nama_barang' => $nama_barang,
							'satuan' => $satuan,
							'saldo_awal' => $saldo_awal,
							'pemasukan' => $pemasukan,
							'pengeluaran' => $pengeluaran,
							'saldo_akhir' => $saldo_akhir,
							'gudang' => $gudang
							);

				$where = array(
								'id_mutasi_produksi' => $id
							);
			 
							
				$this->Model_MutasiHP->update_data($where,$data,'mutasi_produksi');

				$this->session->set_flashdata('succeed', 'Satu data telah di perbarui.');
				redirect('MutasiHP');
			}else{
				$this->load->view('Layouts/error-404');
			}
		}else{
			session_destroy();
			redirect('dashboard');
		}
	}

}
?>
