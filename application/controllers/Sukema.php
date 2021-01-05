<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sukema extends CI_Controller {
	

	public function __construct()
	{
		parent::__construct();
		$this->setsession();
		
	}

	public function setsession(){
		if($this->session->userdata('status') != 1){
			$this->session->set_flashdata('error', 'Session anda telah berakhir, silahkan login kembali!');
			redirect(base_url('login'));
		} 
	}
	
	public function index()
	{	
		$datasession['enhas_account'] = $this->db->get_where('enhas_account', ['username' => $this->session->userdata('username')])->row_array();
		$this->template->load('templates/template',  $datasession);

		if ($this->form_validation->run() == false) {
			$this->load->view('login/index');
		}
	}

	public function dashboard()
	{	
		// $data['guru'] = count($this->enhamodel->getGuru());
		// $data['file'] = count($this->enhamodel->getCountFile());
		// $data['info'] = count($this->enhamodel->getCountInfo());
		$this->template->load('templates/template', 'dashboard');
	}

	/* Edt Profile */
	public function profil()
	{
		$data['profile'] = $this->enhamodel->getProfile();
		$this->template->load('templates/template', 'form_profile' , $data);
	}	

	public function editprofil(){
		$id = $this->input->post('idskul');
		$jejangsekolah = $this->input->post('jenjang');
		$nsm = $this->input->post('nsm');
		$npsn = $this->input->post('npsn');
		$namamadrasah = $this->input->post('namamadrasah');
		$akreditasi = $this->input->post('akreditasi');
		$statussekolah = $this->input->post('statussekolah');
		$provinsi = $this->input->post('provinsi');
		$kabkota = $this->input->post('kabkota');
		$kecamatan = $this->input->post('kecamatan');
		$kelurahan = $this->input->post('kelurahan');
		$alamat = $this->input->post('alamat');
		$kodepos = $this->input->post('kodepos');
		$lattitude = $this->input->post('lattitude');
		$longitude = $this->input->post('longitude');
		$phone = $this->input->post('phone');
		$email = $this->input->post('email');
		$website = $this->input->post('website');
		$visi = $this->input->post('visi');
		$nama_kepsek = $this->input->post('namakepsek');
		$nipkepsek = $this->input->post('nipkepsek');
		$uploadfotokamad =$_FILES['uploadfotokamad']['name'];
		$uploadlogo = $_FILES['uploadlogo']['name'];
		$config['upload_path']= 'assets/images';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';

		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('uploadlogo')){
			if(!$this->upload->do_upload('uploadfotokamad')){
			$data = [
				'jenjang' => $jejangsekolah,
				'npsn' => $npsn,
				'nsm' => $nsm,
				'nama_madrasah' => $namamadrasah,
				'alamat_madrasah' => $alamat,
				'provinsi' => $provinsi,
				'kab_kota' => $kabkota,
				'kecamatan' => $kecamatan,
				'kelurahan'	=> $kelurahan,
				'kodepos' => $kodepos,
				'lattitude' => $lattitude,
				'longitude'	=> $longitude,
				'nilai_akreditasi'	=> $akreditasi,
				'status_sekolah' => $statussekolah,
				'email' => $email,
				'phone' => $phone,
				'website' => $website,
				'nama_kepsek' => $nama_kepsek,
				'nip_kepsek' => $nipkepsek
			];

			$this->enhamodel->updatedataprofile($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil di ubah');
			redirect('sukema/profil');
		}else{
			$loadfoto['profile'] = $this->enhamodel->getProfile();
			if ($loadfoto['profile']->img_kepsek != null) {
				$path = FCPATH.'assets/images/'.$loadfoto['profile']->img_kepsek;
				unlink($path);
			}
        	$uploadfotokamad = $this->upload->data('file_name');
			$data = [
				'jenjang' => $jejangsekolah,
				'npsn' => $npsn,
				'nsm' => $nsm,
				'nama_madrasah' => $namamadrasah,
				'alamat_madrasah' => $alamat,
				'provinsi' => $provinsi,
				'kab_kota' => $kabkota,
				'kecamatan' => $kecamatan,
				'kelurahan'	=> $kelurahan,
				'kodepos' => $kodepos,
				'lattitude' => $lattitude,
				'longitude'	=> $longitude,
				'nilai_akreditasi'	=> $akreditasi,
				'status_sekolah' => $statussekolah,
				'email' => $email,
				'phone' => $phone,
				'website' => $website,
				'nama_kepsek' => $nama_kepsek,
				'nip_kepsek' => $nipkepsek,
				'img_kepsek' => $uploadfotokamad
			];

			$this->enhamodel->updatedataprofile($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil di rubah');
			redirect('sukema/profil');
			}
			
		}else{
			$loadfoto['profile'] = $this->enhamodel->getProfile();
			if ($loadfoto['profile']->img_logo != null) {
				$path = FCPATH.'assets/images/'.$loadfoto['profile']->img_logo;
				unlink($path);
			}
        	$uploadlogo = $this->upload->data('file_name');
			$data = [
				'jenjang' => $jejangsekolah,
				'npsn' => $npsn,
				'nsm' => $nsm,
				'nama_madrasah' => $namamadrasah,
				'alamat_madrasah' => $alamat,
				'provinsi' => $provinsi,
				'kab_kota' => $kabkota,
				'kecamatan' => $kecamatan,
				'kelurahan'	=> $kelurahan,
				'kodepos' => $kodepos,
				'lattitude' => $lattitude,
				'longitude'	=> $longitude,
				'nilai_akreditasi'	=> $akreditasi,
				'status_sekolah' => $statussekolah,
				'email' => $email,
				'phone' => $phone,
				'website' => $website,
				'nama_kepsek' => $nama_kepsek,
				'nip_kepsek' => $nipkepsek,
				'img_logo' => $uploadlogo
			];

			$this->enhamodel->updatedataprofile($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil di rubah');
			redirect('sukema/profil');
		}
	}


	/* Edt Signature Kamad */
	public function signature()
	{
		$data['kamad'] = $this->enhamodel->getTtdKamad();
		$data['tatausaha'] = $this->enhamodel->getTtdTatausaha();
		$data['bendahara'] = $this->enhamodel->getTtdBendahara();
		$data['komite'] = $this->enhamodel->getTtdKomite();
		$data['yayasan'] = $this->enhamodel->getTtdYayasan();
		$this->template->load('templates/template', 'form_signature' , $data);
	}	

	public function editttdkamad(){
		$id = $this->input->post('idkamad');
		$namakamad = $this->input->post('namakamad');
		$nipkamad = $this->input->post('nipkamad');
		$uploadttdkamad =$_FILES['uploadttdkamad']['name'];
		$config['upload_path']= 'assets/images/signature';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';

		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('uploadttdkamad'))
		{
				$data = [
					'nama_kamad' => $namakamad,
					'nip_kamad' => $nipkamad
				];

			$this->enhamodel->updatettdkamad($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil di ubah');
			redirect('sukema/signature');
			
		}else{
			$loadfoto['ttd'] = $this->enhamodel->getTtdKamad();
			if ($loadfoto['ttd']->ttd_kamad != null) {
				$path = FCPATH.'assets/images/signature/'.$loadfoto['ttd']->ttd_kamad;
				unlink($path);
			}
        	$uploadttdkamad = $this->upload->data('file_name');
			$data = [
				'nama_kamad' => $namakamad,
				'nip_kamad' => $nipkamad,
				'ttd_kamad' => $uploadttdkamad
			];

			$this->enhamodel->updatettdkamad($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil di ubah');
			redirect('sukema/signature');
		}
	}

	public function editttdtatausaha(){
		$id = $this->input->post('idtu');
		$namatatausaha = $this->input->post('namatatausaha');
		$niptatausaha = $this->input->post('niptatausaha');
		$uploadttdtu =$_FILES['uploadttdtu']['name'];
		$config['upload_path']= 'assets/images/signature';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';

		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('uploadttdtu'))
		{
				$data = [
					'nama_tatausaha' => $namatatausaha,
					'nip_tatausaha' => $niptatausaha
				];

			$this->enhamodel->updatettdtatausaha($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil di ubah');
			redirect('sukema/signature');
			
		}else{
			$loadfoto['ttd'] = $this->enhamodel->getTtdTatausaha();
			if ($loadfoto['ttd']->ttd_tatausaha != null) {
				$path = FCPATH.'assets/images/signature/'.$loadfoto['ttd']->ttd_tatausaha;
				unlink($path);
			}
        	$uploadttdtu = $this->upload->data('file_name');
			$data = [
				'nama_tatausaha' => $namatatausaha,
				'nip_tatausaha' => $niptatausaha,
				'ttd_tatausaha' => $uploadttdtu
			];

			$this->enhamodel->updatettdtatausaha($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil di ubah');
			redirect('sukema/signature');
		}
	}


	public function editttdbendahara(){
		$id = $this->input->post('idbendahara');
		$namabendahara = $this->input->post('namabendahara');
		$nipbendahara = $this->input->post('nipbendahara');
		$uploadttdbendahara =$_FILES['uploadttdbendahara']['name'];
		$config['upload_path']= 'assets/images/signature';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';

		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('uploadttdbendahara'))
		{
				$data = [
					'nama_bendahara' => $namabendahara,
					'nip_bendahara' => $nipbendahara
				];

			$this->enhamodel->updatettdbendahara($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil di ubah');
			redirect('sukema/signature');
			
		}else{
			$loadfoto['ttd'] = $this->enhamodel->getTtdBendahara();
			if ($loadfoto['ttd']->ttd_bendahara != null) {
				$path = FCPATH.'assets/images/signature/'.$loadfoto['ttd']->ttd_bendahara;
				unlink($path);
			}
        	$uploadttdbendahara = $this->upload->data('file_name');
			$data = [
				'nama_bendahara' => $namabendahara,
				'nip_bendahara' => $nipbendahara,
				'ttd_bendahara' => $uploadttdbendahara
			];

			$this->enhamodel->updatettdbendahara($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil di ubah');
			redirect('sukema/signature');
		}
	}

	public function editttdkomite(){
		$id = $this->input->post('idkomite');
		$namakomite = $this->input->post('namakomite');
		$nipkomite = $this->input->post('nipkomite');
		$uploadttdkomite =$_FILES['uploadttdkomite']['name'];
		$config['upload_path']= 'assets/images/signature';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';

		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('uploadttdkomite'))
		{
				$data = [
					'nama_komite' => $namakomite,
					'nip_komite' => $nipkomite
				];

			$this->enhamodel->updatettdkomite($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil di ubah');
			redirect('sukema/signature');
			
		}else{
			$loadfoto['ttd'] = $this->enhamodel->getTtdKomite();
			if ($loadfoto['ttd']->ttd_komite != null) {
				$path = FCPATH.'assets/images/signature/'.$loadfoto['ttd']->ttd_komite;
				unlink($path);
			}
        	$uploadttdkomite = $this->upload->data('file_name');
			$data = [
				'nama_komite' => $namakomite,
				'nip_komite' => $nipkomite,
				'ttd_komite' => $uploadttdkomite
			];

			$this->enhamodel->updatettdkomite($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil di ubah');
			redirect('sukema/signature');
		}
	}


	public function editttdyayasan(){
		$id = $this->input->post('idyayasan');
		$namayayasan = $this->input->post('namayayasan');
		$nipyayasan = $this->input->post('nipyayasan');
		$uploadttdyayasan =$_FILES['uploadttdyayasan']['name'];
		$config['upload_path']= 'assets/images/signature';
		$config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';

		$this->load->library('upload', $config);
		if(!$this->upload->do_upload('uploadttdyayasan'))
		{
				$data = [
					'nama_yayasan' => $namayayasan,
					'nip_yayasan' => $nipyayasan
				];

			$this->enhamodel->updatettdyayasan($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil di ubah');
			redirect('sukema/signature');
			
		}else{
			$loadfoto['ttd'] = $this->enhamodel->getTtdYayasan();
			if ($loadfoto['ttd']->ttd_yayasan != null) {
				$path = FCPATH.'assets/images/signature/'.$loadfoto['ttd']->ttd_yayasan;
				unlink($path);
			}
        	$uploadttdyayasan = $this->upload->data('file_name');
			$data = [
				'nama_yayasan' => $namayayasan,
				'nip_yayasan' => $nipyayasan,
				'ttd_yayasan' => $uploadttdyayasan
			];

			$this->enhamodel->updatettdkomite($data, $id);
			$this->session->set_flashdata('message', 'Data berhasil di ubah');
			redirect('sukema/signature');
		}
	}

	public function suratmasuk()
	{	
		$data['suratmasuk'] = $this->enhamodel->getSuratMasuk();
		$this->template->load('templates/template', 'form_suratmasuk', $data);
	}

	// public function inputsuratmasuk()
	// {
	// 	$this->setsession();
		
	// }



	public function deletesuratmasuk($id)
	{
		$surat['surat'] = $this->enhamodel->getSuratMasukById($id);
		if ($surat['surat']['img_surat'] != null) {
			$path = FCPATH.'assets/images/suratmasuk/'.$surat['surat']['img_surat'];
			unlink($path);}
		$this->enhamodel->selectdeleteSurat($id);
		$this->session->set_flashdata('message', 'Data berhasil di hapus');
		redirect('sukema/suratmasuk');
	}

	

}