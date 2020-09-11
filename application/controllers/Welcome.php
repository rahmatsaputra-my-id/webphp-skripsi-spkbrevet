<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
		parent::__construct();


			$this->load->model('m_login');
			$this->load->model('m_register');
			$this->load->model("M_alternatif");
			$this->load->model("M_kriteria");
			$this->load->model("M_bobot");
	        $this->load->library('form_validation');
	        $this->load->library('pdf_report');
			/*if(!$this->session->userdata('nama')){
				redirect('');
			}*/
	}
	
	public function index()
	{
		$this->load->view('index.php');
	}

	public function login()
	{

		$this->load->view('pengguna/login.php');
			
	}

    public function add()
    {
        $nilai = $this->M_alternatif;
        $validation = $this->form_validation;
        $validation->set_rules($nilai->rules());

        if ($validation->run()) {
            $nilai->save();
            $this->session->set_flashdata('success', 'Berhasil disimpan');
        }

        $this->load->view("welcome/setting_alternatif_tambah");
    }
	
	public function setting_alternatif_tambah()
	{

		if($this->input->post('btn')=='Simpan'){
			
			$data['id'] = $this->input->post('id');
			$data['nama_alternatif'] = $this->input->post('nama_alternatif');
			$data['k1'] = $this->input->post('k1');
			$data['k2'] = $this->input->post('k2');
			$data['k3'] = $this->input->post('k3');
			$data['k4'] = $this->input->post('k4');
			$data['k5'] = $this->input->post('k5');
			$data['k6'] = $this->input->post('k6');
			$data['k7'] = $this->input->post('k7');
			$data['rating'] = 
			($this->input->post('k1') / $this->input->post('maxk1')) * $this->input->post('bobot1') +
			($this->input->post('k2') / $this->input->post('maxk2')) * $this->input->post('bobot2') +
			($this->input->post('k3') / $this->input->post('maxk3')) * $this->input->post('bobot3') +
			($this->input->post('k4') / $this->input->post('maxk4')) * $this->input->post('bobot4') +
			($this->input->post('k5') / $this->input->post('maxk5')) * $this->input->post('bobot5') +
			($this->input->post('k6') / $this->input->post('maxk6')) * $this->input->post('bobot6') +
			($this->input->post('k7') / $this->input->post('maxk7')) * $this->input->post('bobot7');
			

				$this->M_alternatif->save($data);
				echo '<script>alert("Berhasil Ditambahkan!");</script>';
				$data1['k'] = $this->M_alternatif->besar1();
				$data1['bbtAll'] = $this->M_alternatif->bobotAll();
				$this->load->view('alternatifly/setting_alternatif_tambah.php',$data1);
		}
		$data1['k'] = $this->M_alternatif->besar1();
		$data1['bbtAll'] = $this->M_alternatif->bobotAll();
		$this->load->view('alternatifly/setting_alternatif_tambah.php',$data1);
			
	}

	/*public function setting_alternatif_cari()
	{

		if($this->input->post('btn')=='Cari'){
			
			
			$data['nama_alternatif'] = $this->input->post('nama_alternatif');
			
			

			
				$this->M_alternatif->save($data);
				echo '<script>alert("Berhasil Ditambahkan!");</script>';
				$data1['k'] = $this->M_alternatif->besar1();
				$data1['bbtAll'] = $this->M_alternatif->bobotAll(	);
				$this->load->view('alternatifly/setting_alternatif_cari.php',$data1);
		}
		$this->load->view('alternatifly/setting_alternatif_cari.php',$data1);
			
	}*/


	public function setting_alternatif_hapus($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_alternatif->delete($id)) {
            redirect(site_url('welcome/setting_alternatif'));
        }
    }

	public function setting_kriteria_tambah()
	{

		if($this->input->post('btn')=='Save'){
			
			$data['id'] = $this->input->post('id');
			$data['nama_kriteria'] = $this->input->post('nama_kriteria');
			$data['bobot_kriteria'] = $this->input->post('bobot_kriteria');
			$id = $this->input->post('id');
			$nama_kriteria = $this->input->post('nama_kriteria');
			$bobot_kriteria = $this->input->post('bobot_kriteria');
			$where = array(
				'id' => $id
				);

			$cek = $this->m_register->cobain ("spkbrevet_kriteria",$where)->num_rows();

			$x=0;
			if($cek > 0){
	 
				echo '<script>alert("ID Kriteria telah digunakan");</script>';
				$this->load->view('kriterialy/setting_kriteria_tambah.php');

			}/*else{
				if ($x ==2) {
					echo '<script>alert("ID Kriteria Sudah Penuh!");</script>';
					$this->load->view('kriterialy/setting_kriteria_tambah.php');
					
				}*/ else{
					
					$x++;
					$this->M_kriteria->save($data);
					echo '<script>alert("Berhasil Ditambahkan!");</script>';
					$this->load->view('kriterialy/setting_kriteria_tambah.php');

				/*}*/
			}
		}
		
		$this->load->view('kriterialy/setting_kriteria_tambah.php');
	}
	/*if($cek > 0){
	 
				echo '<script>alert("ID kriteria telah digunakan");</script>';
				$this->load->view('kriterialy/setting_kriteria_tambah.php');

			}elseif ($x >= 2) {
					echo '<script>alert("ID Kriteria Sudah Penuh!");</script>';
					$this->load->view('kriterialy/setting_kriteria.php');
			} else{
				
				$this->M_kriteria->save($data);
				$x++;
				echo '<script>alert("Berhasil Ditambahkan!");</script>';
				$this->load->view('kriterialy/setting_kriteria_tambah.php');
				

			}*/

	public function setting_kriteria_edit($id)
	{

		if($this->input->post('btn')=='Simpan'){

			/*$bobot_kriteria = $this->input->post('bobot_kriteria');
			$where = array(
				'bobot_kriteria' => $bobot_kriteria
				);

			$cek1 = $this->m_register->cobain ("spkbrevet_kriteria",$where)->num_rows();

			if($cek1>1){
			echo '<script>alert("Nilai Kriteria lebih dari 1!");</script>';	
			$this->load->view('kriterialy/setting_kriteria_edit.php',$data);
			}*/
			/*$i = 1;*/
			/*if ($this->M_alternatif->jumlah() >= $i){
				echo '<script>alert("Bobot kriteria lebih dari satu!");</script>';
				$data["nilai"] = $this->M_kriteria->read_update('spkbrevet_kriteria','id',$id);
			$this->load->view('kriterialy/setting_kriteria_edit.php',$data);

			} else {
			}*/
				$this->M_kriteria->update('spkbrevet_kriteria');
				redirect(site_url('setting_kriteria'));
			
		}
			//die();
			$data["nilai"] = $this->M_kriteria->read_update('spkbrevet_kriteria','id',$id);
			$this->load->view('kriterialy/setting_kriteria_edit.php',$data);
			
	}

	public function setting_kriteria_editBobot($id)
	{

		if($this->input->post('btn')=='Simpan'){

			/*$bobot_kriteria = $this->input->post('bobot_kriteria');
			$where = array(
				'bobot_kriteria' => $bobot_kriteria
				);

			$cek1 = $this->m_register->cobain ("spkbrevet_kriteria",$where)->num_rows();

			if($cek1>1){
			echo '<script>alert("Nilai Kriteria lebih dari 1!");</script>';	
			$this->load->view('kriterialy/setting_kriteria_edit.php',$data);
			}*/
			/*$i = 1;*/
			/*if ($this->M_alternatif->jumlah() >= $i){
				echo '<script>alert("Bobot kriteria lebih dari satu!");</script>';
				$data["nilai"] = $this->M_kriteria->read_update('spkbrevet_kriteria','id',$id);
			$this->load->view('kriterialy/setting_kriteria_edit.php',$data);

			} else {
			}*/
				$this->M_bobot->update('spkbrevet_bobot');
				$data_k["nilai"] = $this->M_kriteria->getAll();
				$data_k["nilaib"] = $this->M_bobot->getAll();
        		$this->load->view('kriterialy/setting_kriteria.php',$data_k);
			
		
		}
			//die();
			$data["nilaib"] = $this->M_bobot->read_update('spkbrevet_bobot','id',$id);
			$this->load->view('kriterialy/setting_kriteria_editBobot.php',$data);
			
	}

	public function setting_kriteria_hapus($id=null)
    {
        if (!isset($id)) show_404();
        
        if ($this->M_kriteria->delete($id)) {
            redirect(site_url('welcome/setting_kriteria'));
        }
    }

	public function setting_kriteria()
	{
		$data_k["nilai"] = $this->M_kriteria->getAll();
		$data_k["nilaib"] = $this->M_bobot->getAll();
        $this->load->view('kriterialy/setting_kriteria.php',$data_k);
			
	}

    public function setting_alternatif()
	{
		
		$data["nilai"] = $this->M_alternatif->getAll();
        $this->load->view('alternatifly/setting_alternatif.php',$data);		
	}

	public function setting_alternatif_edit($id)
	{

		if($this->input->post('btn')=='Update'){

		$this->M_alternatif->update_nilai('spkbrevet_alternatif');
		redirect(site_url('setting_alternatif'));
		
		}
			$data["nilai"] = $this->M_alternatif->read_update('spkbrevet_alternatif','id',$id);
			$data['k'] = $this->M_alternatif->besar1();
			$data['bbtAll'] = $this->M_alternatif->bobotAll();
			$this->load->view('alternatifly/setting_alternatif_edit.php',$data);
	}

	public function normalisasi_edit($id)
	{

		if($this->input->post('btn')=='Update'){
		$this->M_alternatif->update_nilai('spkbrevet_alternatif');
		redirect(site_url('normalisasi'));
		
		}
			$data["nilai"] = $this->M_alternatif->read_update('spkbrevet_alternatif','id',$id);
			$this->load->view('alternatifly/normalisasi_edit.php',$data);
	}

	public function normalisasi()
	{


		$data1["nilai"] = $this->M_alternatif->getAll();
		$data1['k'] = $this->M_alternatif->besar1();
		$data1['bbtAll'] = $this->M_alternatif->bobotAll();
		$data1['row1'] = $this->M_alternatif->baris0();
		$data1['row2'] = $this->M_alternatif->baris1();
		$data1['row3'] = $this->M_alternatif->baris2();
		$data1['rate'] = $this->M_alternatif->rate();
		$data1['krit1'] = $this->M_alternatif->kriteria1();
		$data1['krit2'] = $this->M_alternatif->kriteria2();
		$data1['krit3'] = $this->M_alternatif->kriteria3();
		$data1['krit4'] = $this->M_alternatif->kriteria4();
		$data1['krit5'] = $this->M_alternatif->kriteria5();
		$data1['krit6'] = $this->M_alternatif->kriteria6();
		$data1['krit7'] = $this->M_alternatif->kriteria7();
		$data1["nilaik"] = $this->M_alternatif->getAllKrit();
		
        $this->load->view('alternatifly/normalisasi.php',$data1);
			
	}

	public function export_excel()
	{
		$data1["nilai"] = $this->M_alternatif->getAll();
		$data1['nilaib'] = $this->M_alternatif->getAsc();
		$data1['k'] = $this->M_alternatif->besar1();
		$data1['bbtAll'] = $this->M_alternatif->bobotAll();
		$data1['row1'] = $this->M_alternatif->baris0();
		$data1['row2'] = $this->M_alternatif->baris1();
		$data1['row3'] = $this->M_alternatif->baris2();
		$data1["nilaik"] = $this->M_alternatif->getAllKrit();
		
        $this->load->view('export/export_excel.php',$data1);
	}

	public function export_pdf()
	{
		$data1["nilai"] = $this->M_alternatif->getAll();
		$data1['nilaib'] = $this->M_alternatif->getAsc();
		$data1['k'] = $this->M_alternatif->besar1();
		$data1['bbtAll'] = $this->M_alternatif->bobotAll();
		$data1['row1'] = $this->M_alternatif->baris0();
		$data1['row2'] = $this->M_alternatif->baris1();
		$data1['row3'] = $this->M_alternatif->baris2();
		$data1["nilaik"] = $this->M_alternatif->getAllKrit();
		
        $this->load->view('export/export_pdf.php',$data1);
	}

	public function cetak_data()
	{
		$data1["nilai"] = $this->M_alternatif->getAll();
		$data1['nilaib'] = $this->M_alternatif->getAsc();
		$data1['k'] = $this->M_alternatif->besar1();
		$data1['bbtAll'] = $this->M_alternatif->bobotAll();
		$data1['row1'] = $this->M_alternatif->baris0();
		$data1['row2'] = $this->M_alternatif->baris1();
		$data1['row3'] = $this->M_alternatif->baris2();
		$data1["nilaik"] = $this->M_alternatif->getAllKrit();
		
        $this->load->view('export/cetak_data.php',$data1);
	}

	public function normalisasi_skor(){
		if($this->input->post('btn')=='InputDatabase'){
		$this->M_alternatif->update_skor('spkbrevet_alternatif');
		redirect(site_url('normalisasi'));
		}
	}

	public function ranking()
	{
		
		$data["nilai"] = $this->M_alternatif->getAll();
		if($this->input->post('btn')=='Pemeringkatan'){
			$data['nilai'] = $this->M_alternatif->getAsc();
		}
		$this->load->view('ranking.php',$data);		
	}
	
	public function aksi_login(){

	
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->M_login->cek_login("spkbrevet_users",$where)->num_rows();
		if($cek > 0){
 
			$data_session = array(
				'nama' => $username,
				'status' => "Login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("dashboard"));
 
		}else{
			echo '<script>alert("Username dan Password tidak valid!");</script>';
			$this->load->view('pengguna/login.php');
		}		
	}

	public function register()
	{
		$this->load->view('pengguna/register.php');
	}

	public function aksi_register(){
		$data['email'] = $this->input->post('email');
		$data['username'] = $this->input->post('username');
		$data['password'] = $this->input->post('password');
		$data['repassword'] = $this->input->post('repassword');
		$email = $this->input->post('email');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$repassword = $this->input->post('repassword');

		$where = array(
			'username' => $username
			);

		$cek = $this->m_register->cobain ("spkbrevet_users",$where)->num_rows();
		if($cek > 0){
 
			echo '<script>alert("Pendaftaran Gagal! Username telah digunakan");</script>';
			$this->load->view('pengguna/register.php');

		}
		else if($password != $repassword){
 
			echo '<script>alert("Pendaftaran Gagal! password tidak match");</script>';
			$this->load->view('pengguna/register.php');

		}else{

		$this->m_register->cek_register($data);

		echo '<script>alert("Pendaftaran Berhasil!");</script>';
		$this->load->view('pengguna/login.php');
		}
		
	}


	public function dashboard()
	{
		$this->load->view('dashboard.php');
		
	}

	public function logout(){
		$this->session->unset_userdata("nama"); 
     	redirect(base_url('home'));

	}
}
