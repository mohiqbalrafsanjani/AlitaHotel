<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeAlita extends CI_Controller {


    //catatan belajar
    //jika pake [0] kalo pake for dan tanpa for
    //jika tidak pake [0] pakenya foreach
	public function __construct()
	{
		parent::__construct();

		// load Session Library
		$this->load->library('session');
			
		// load url helper
		$this->load->helper('url');

		$this->load->model('mymodel');
		//memanggil applications/models/Mymodel.php
	}


	public function index()
	{
		//memanggil data dari seluruh tabel datakamar	
		$data = $this->mymodel->Get('datakamar');
		//$data = $this->db->get()->result_array();  
		
		$data = array(
			'data' => $data
		);
		//masukkan hasil query ke array data
		$this->load->view('home', $data);
		//masukkan array data ketika menampilkan home
	}

	public function pesan()
	{
		$id_kamar= array(
			'id_kamar' => $_POST['id_kamar']
		);
	
		//mengambil id_kamar dari halaman sebelumnya
		
		$data['datakamar'] = $this->mymodel->GetWhere('datakamar', $id_kamar); 
		
		//SESSION
		$nama_kamar = $data['datakamar'][0]['nama_kamar'];
		$this->session->set_userdata('nama_kamar', $nama_kamar);
		$this->session->set_userdata('id_kamar', $id_kamar);
		
		
		$data['fasilitas'] = $this->mymodel->Get('fasilitas');
		//ambil semua data dari tabel fasilitas
		//coba
		//$data = array('data' => $data);
		$this->load->view('pesan', $data);
		//masukkan array data ketika menampilkan pesan
	}

	public function tentang_kami()
	{
		$this->load->view('tentang_kami');
	}
	
	public function login()
	{
		$this->load->view('login');
	}
	public function proses_login()
	{
		$username = $_POST['username'];
		$password = $_POST['password'];
		
		$logindata = $this->db->query('SELECT id_akun FROM akun where username = "'.$username.'" and password="'.$password.'"');
		$id_akun = $logindata->result_array();
		$data['fasilitas'] = $this->mymodel->GetWhere('id_akun', $id_akun);
		if (!$logindata) {
			echo "username atau password salah";
			$this->load->view('login');
		} else {
			$this->session->set_userdata('username', $username);
			$this->session->set_userdata('password', $password);
		}

		$this->load->view('index',);
	}

	public function daftar()
	{
		$this->load->view('datapemesan');
	}

	public function pesan_kamar()
	{
		$this->load->model('mymodel');

		$tgl_cek_in = $_POST['tgl_cek_in'];
		$tgl_cek_out = $_POST['tgl_cek_out'];
		
		$this->session->set_userdata('tgl_cek_in', $tgl_cek_in);
		$this->session->set_userdata('tgl_cek_out', $tgl_cek_out);

		$id_fasilitas= array(
			'id_fasilitas' => $_POST['id_fasilitas']
		);
		
		$data['fasilitas'] = $this->mymodel->GetWhere('fasilitas', $id_fasilitas);
		$this->session->set_userdata('id_fasilitas', $id_fasilitas);


		$id_kamar = $this->session->userdata('id_kamar');
		$data['datakamar'] = $this->mymodel->GetWhere('datakamar', $id_kamar); 
		
				
		
		//$data['fasilitas'] = $this->mymodel->Get('fasilitas');
		//ambil semua data dari tabel fasilitas
		//coba
		//$data = array('data' => $data);
		$this->load->view('pesan_kamar', $data);
		//masukkan array data ketika menampilkan pesan
	}

	public function pesanan()
	{
		if(!empty($_POST['pilihKursi'])){
			//jika memilih kursi, maka isi $data['kursi']
			
			$kursi = $_POST['pilihKursi'];
			$this->session->set_userdata('kursi', $kursi);
			$data['kursi'] = $kursi;
			
		}	
		else{
			//jika tidak memilih kursi, maka $data['kursi'] kosong
			$data['kursi']=[];
		}
		$data = array('data' => $data);
		$this->load->view('pesanan', $data);
	}

	public function hapus(){  
		$tgl_cek_in = $this->session->userdata('tgl_cek_in');
		$tgl_cek_out = $this->session->userdata('tgl_cek_out');
		$id_kamar = $this->session->userdata('id_kamar');
		$id_fasilitas = $this->session->userdata('id_fasilitas');
		unset($tgl_cek_in);
		unset($tgl_cek_out);
		unset($id_fasilitas);
		unset($id_kamar);
		
		$this->load->view('index'); 
	}
		
	public function edit()
	{
		
		$tgl_cek_in = $this->session->userdata('tgl_cek_in');
		$tgl_cek_out = $this->session->userdata('tgl_cek_out');
		$data['fasilitas'] = $this->mymodel->Get('fasilitas');
		$data['datakamar'] = $this->mymodel->Get('datakamar');
		

		$this->load->view('edit', $data);
	}

	public function proses_edit()
	{

		$this->load->model('mymodel');

		$tgl_cek_in = $_POST['tgl_cek_in'];
		$tgl_cek_out = $_POST['tgl_cek_out'];
		
		$this->session->set_userdata('tgl_cek_in', $tgl_cek_in);
		$this->session->set_userdata('tgl_cek_out', $tgl_cek_out);

		$id_fasilitas= array(
			'id_fasilitas' => $_POST['id_fasilitas']
		);
		
		$data['fasilitas'] = $this->mymodel->GetWhere('fasilitas', $id_fasilitas);
		$this->session->set_userdata('id_fasilitas', $id_fasilitas);

		$id_kamar= array(
			'id_kamar' => $_POST['id_kamar']
		);
	
		//mengambil id_kamar dari halaman sebelumnya
		
		$data['datakamar'] = $this->mymodel->GetWhere('datakamar', $id_kamar); 
		
		//SESSION
		$nama_kamar = $data['datakamar'][0]['nama_kamar'];
		$this->session->set_userdata('nama_kamar', $nama_kamar);
		$this->session->set_userdata('id_kamar', $id_kamar);

		$this->load->view('pesan_kamar', $data);
	}
	
	public function bayar()
	{
		$listkursi = $this->session->userdata('kursi');
		$data['kursi'] = array_values($listkursi);

		$jum_kursi = count($data['kursi']);
		$j=0;
		$this->load->model('mymodel');
		foreach($data['kursi'] as $k){
			$data_insert = array(
				'id_film' => $this->session->userdata('id_film'),
				'tanggal_nonton' => $this->session->userdata('tanggal_nonton'),
				'id_jadwal' => $this->session->userdata('id_jadwal'),
				'nokur' => $k
			);		
			if($this->mymodel->Insert('pesanan', $data_insert)){
				$j++;
				//jika berhasil insert tambah +1 nilai pada $j
			}		
		}
		$data = array('data' => $data);
		if($j==$jum_kursi){
			//misal pesan 2 kursi
			//jika berhasil insert 2 kursi, maka tampilkan tiket
			$this->load->view('tiket', $data);
		}
		else{
			//jika tidak, maka kembali ke pemesanan
			$this->load->view('pesanan',$data);
		}
		
	}
}

