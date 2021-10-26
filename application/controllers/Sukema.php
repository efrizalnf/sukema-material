<?php
defined('BASEPATH') or exit('No direct script access allowed');
define('ROOTPATH', dirname(dirname(__FILE__)) . '/');

class Sukema extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->setsession();
        $this->load->helper('Sukema_helper');
    }

    public function setsession()
    {
        if ($this->session->userdata('status') != 1) {
            $this->session->set_flashdata('error', 'Session anda telah berakhir, silahkan login kembali!');
            redirect(base_url('login'));
        }
    }

    public function index()
    {
        $datasession['enhas_account'] = $this->db->get_where('enhas_account', ['username' => $this->session->userdata('username')])->row_array();
        $this->template->load('templates/template', $datasession);

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
        $this->template->load('templates/template', 'form_profile', $data);
    }

    public function editprofil()
    {
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
        $namayayasan = $this->input->post('namayayasan');
        $nama_kepsek = $this->input->post('namakepsek');
        $nipkepsek = $this->input->post('nipkepsek');
        $uploadfotokamad = $_FILES['uploadfotokamad']['name'];
        $uploadlogo = $_FILES['uploadlogo']['name'];
        $config['upload_path'] = 'assets/images';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('uploadlogo')) {
            if (!$this->upload->do_upload('uploadfotokamad')) {
                $data = [
                    'jenjang' => $jejangsekolah,
                    'npsn' => $npsn,
                    'nsm' => $nsm,
                    'nama_madrasah' => $namamadrasah,
                    'alamat_madrasah' => $alamat,
                    'provinsi' => $provinsi,
                    'kab_kota' => $kabkota,
                    'kecamatan' => $kecamatan,
                    'kelurahan' => $kelurahan,
                    'kodepos' => $kodepos,
                    'lattitude' => $lattitude,
                    'longitude' => $longitude,
                    'nilai_akreditasi' => $akreditasi,
                    'status_sekolah' => $statussekolah,
                    'nama_yayasan' => $namayayasan,
                    'email' => $email,
                    'phone' => $phone,
                    'website' => $website,
                    'nama_kepsek' => $nama_kepsek,
                    'nip_kepsek' => $nipkepsek,
                ];

                $this->enhamodel->updatedataprofile($data, $id);
                $this->session->set_flashdata('message', 'Data berhasil di ubah');
                redirect('sukema/profil');
            } else {
                $loadfoto['profile'] = $this->enhamodel->getProfile();
                $path = FCPATH . 'assets/images/' . $loadfoto['profile']->img_kepsek;
                if (file_exists($path)) {
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
                    'kelurahan' => $kelurahan,
                    'kodepos' => $kodepos,
                    'lattitude' => $lattitude,
                    'longitude' => $longitude,
                    'nilai_akreditasi' => $akreditasi,
                    'status_sekolah' => $statussekolah,
                    'nama_yayasan' => $namayayasan,
                    'email' => $email,
                    'phone' => $phone,
                    'website' => $website,
                    'nama_kepsek' => $nama_kepsek,
                    'nip_kepsek' => $nipkepsek,
                    'img_kepsek' => $uploadfotokamad,
                ];

                $this->enhamodel->updatedataprofile($data, $id);
                $this->session->set_flashdata('message', 'Data berhasil di rubah');
                redirect('sukema/profil');
            }
        } else {
            $loadfoto['profile'] = $this->enhamodel->getProfile();
            $path = FCPATH . 'assets/images/' . $loadfoto['profile']->img_logo;
            if (file_exists($path)) {
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
                'kelurahan' => $kelurahan,
                'kodepos' => $kodepos,
                'lattitude' => $lattitude,
                'longitude' => $longitude,
                'nilai_akreditasi' => $akreditasi,
                'status_sekolah' => $statussekolah,
                'nama_yayasan' => $namayayasan,
                'email' => $email,
                'phone' => $phone,
                'website' => $website,
                'nama_kepsek' => $nama_kepsek,
                'nip_kepsek' => $nipkepsek,
                'img_logo' => $uploadlogo,
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
        $this->template->load('templates/template', 'form_signature', $data);
    }

    public function editttdkamad()
    {
        $id = $this->input->post('idkamad');
        $namakamad = $this->input->post('namakamad');
        $nipkamad = $this->input->post('nipkamad');
        $uploadttdkamad = $_FILES['uploadttdkamad']['name'];
        $config['upload_path'] = 'assets/images/signature';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('uploadttdkamad')) {
            $data = [
                'nama_kamad' => $namakamad,
                'nip_kamad' => $nipkamad,
            ];

            $this->enhamodel->updatettdkamad($data, $id);
            $this->session->set_flashdata('message', 'Data berhasil di ubah');
            redirect('sukema/signature');
        } else {
            $loadfoto['ttd'] = $this->enhamodel->getTtdKamad();
            $path = FCPATH . 'assets/images/signature/' . $loadfoto['ttd']->ttd_kamad;
            if (file_exists($path)) {
                unlink($path);
            }
            $uploadttdkamad = $this->upload->data('file_name');
            $data = [
                'nama_kamad' => $namakamad,
                'nip_kamad' => $nipkamad,
                'ttd_kamad' => $uploadttdkamad,
            ];

            $this->enhamodel->updatettdkamad($data, $id);
            $this->session->set_flashdata('message', 'Data berhasil di ubah');
            redirect('sukema/signature');
        }
    }

    public function editttdtatausaha()
    {
        $id = $this->input->post('idtu');
        $namatatausaha = $this->input->post('namatatausaha');
        $niptatausaha = $this->input->post('niptatausaha');
        $uploadttdtu = $_FILES['uploadttdtu']['name'];
        $config['upload_path'] = 'assets/images/signature';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('uploadttdtu')) {
            $data = [
                'nama_tatausaha' => $namatatausaha,
                'nip_tatausaha' => $niptatausaha,
            ];

            $this->enhamodel->updatettdtatausaha($data, $id);
            $this->session->set_flashdata('message', 'Data berhasil di ubah');
            redirect('sukema/signature');
        } else {
            $loadfoto['ttd'] = $this->enhamodel->getTtdTatausaha();
            $path = FCPATH . 'assets/images/signature/' . $loadfoto['ttd']->ttd_tatausaha;
            if (file_exists($path)) {
                unlink($path);
            }
            $uploadttdtu = $this->upload->data('file_name');
            $data = [
                'nama_tatausaha' => $namatatausaha,
                'nip_tatausaha' => $niptatausaha,
                'ttd_tatausaha' => $uploadttdtu,
            ];

            $this->enhamodel->updatettdtatausaha($data, $id);
            $this->session->set_flashdata('message', 'Data berhasil di ubah');
            redirect('sukema/signature');
        }
    }

    public function editttdbendahara()
    {
        $id = $this->input->post('idbendahara');
        $namabendahara = $this->input->post('namabendahara');
        $nipbendahara = $this->input->post('nipbendahara');
        $uploadttdbendahara = $_FILES['uploadttdbendahara']['name'];
        $config['upload_path'] = 'assets/images/signature';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('uploadttdbendahara')) {
            $data = [
                'nama_bendahara' => $namabendahara,
                'nip_bendahara' => $nipbendahara,
            ];

            $this->enhamodel->updatettdbendahara($data, $id);
            $this->session->set_flashdata('message', 'Data berhasil di ubah');
            redirect('sukema/signature');
        } else {
            $loadfoto['ttd'] = $this->enhamodel->getTtdBendahara();
            $path = FCPATH . 'assets/images/signature/' . $loadfoto['ttd']->ttd_bendahara;
            if (file_exists($path)) {
                unlink($path);
            }
            $uploadttdbendahara = $this->upload->data('file_name');
            $data = [
                'nama_bendahara' => $namabendahara,
                'nip_bendahara' => $nipbendahara,
                'ttd_bendahara' => $uploadttdbendahara,
            ];

            $this->enhamodel->updatettdbendahara($data, $id);
            $this->session->set_flashdata('message', 'Data berhasil di ubah');
            redirect('sukema/signature');
        }
    }

    public function editttdkomite()
    {
        $id = $this->input->post('idkomite');
        $namakomite = $this->input->post('namakomite');
        $nipkomite = $this->input->post('nipkomite');
        $uploadttdkomite = $_FILES['uploadttdkomite']['name'];
        $config['upload_path'] = 'assets/images/signature';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('uploadttdkomite')) {
            $data = [
                'nama_komite' => $namakomite,
                'nip_komite' => $nipkomite,
            ];

            $this->enhamodel->updatettdkomite($data, $id);
            $this->session->set_flashdata('message', 'Data berhasil di ubah');
            redirect('sukema/signature');
        } else {
            $loadfoto['ttd'] = $this->enhamodel->getTtdKomite();
            $path = FCPATH . 'assets/images/signature/' . $loadfoto['ttd']->ttd_komite;
            if (file_exists($path)) {
                unlink($path);
            }
            $uploadttdkomite = $this->upload->data('file_name');
            $data = [
                'nama_komite' => $namakomite,
                'nip_komite' => $nipkomite,
                'ttd_komite' => $uploadttdkomite,
            ];

            $this->enhamodel->updatettdkomite($data, $id);
            $this->session->set_flashdata('message', 'Data berhasil di ubah');
            redirect('sukema/signature');
        }
    }

    public function editttdyayasan()
    {
        $id = $this->input->post('idyayasan');
        $namayayasan = $this->input->post('namayayasan');
        $nipyayasan = $this->input->post('nipyayasan');
        $uploadttdyayasan = $_FILES['uploadttdyayasan']['name'];
        $config['upload_path'] = 'assets/images/signature';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('uploadttdyayasan')) {
            $data = [
                'nama_yayasan' => $namayayasan,
                'nip_yayasan' => $nipyayasan,
            ];

            $this->enhamodel->updatettdyayasan($data, $id);
            $this->session->set_flashdata('message', 'Data berhasil di ubah');
            redirect('sukema/signature');
        } else {
            $loadfoto['ttd'] = $this->enhamodel->getTtdYayasan();
            $path = FCPATH . 'assets/images/signature/' . $loadfoto['ttd']->ttd_yayasan;
            if (file_exists($path)) {
                unlink($path);
            }
            $uploadttdyayasan = $this->upload->data('file_name');
            $data = [
                'nama_yayasan' => $namayayasan,
                'nip_yayasan' => $nipyayasan,
                'ttd_yayasan' => $uploadttdyayasan,
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

    public function inputsuratmasuk()
    {
        $tglsurat = $this->input->post('tglsuratmasuk');
        $nosuratmasuk = $this->input->post('nosuratmasuk');
        $perihal = $this->input->post('perihal');
        $asalsurat = $this->input->post('asalsurat');
        $uploadsurat = $_FILES['userfile']['name'];
        $config['upload_path'] = './assets/images/surat';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
        // $format = 'sukema_suratmasuk_' . date('Ymd_h:i:s A');
        // $config['file_name'] = "file_name";
        $config['maxsize'] = '2000';

        $this->load->library('upload', $config);
		$doupload = $this->upload->do_upload('userfile'); 
        if (!$doupload) {
            $data = [
                'tgl_suratmasuk' => $tglsurat,
                'no_suratmasuk' => $nosuratmasuk,
                'perihal' => $perihal,
                'asal_surat' => $asalsurat,
            ];

            $this->enhamodel->inputsuratmasuk($data);
            $this->session->set_flashdata('message', 'Surat masuk berhasil disimpan');
            redirect('sukema/suratmasuk');
        } else {
            $uploadsurat['img_surat'] = $this->upload->data('file_name');
            $data = [
                'tgl_suratmasuk' => $tglsurat,
                'no_suratmasuk' => $nosuratmasuk,
                'perihal' => $perihal,
                'asal_surat' => $asalsurat,
                'img_surat' => $uploadsurat,
            ];
            $this->enhamodel->inputsuratmasuk($data);
            $this->session->set_flashdata('message', 'Surat masuk berhasil disimpan');
            redirect('sukema/suratmasuk');
        }
    }

    public function editsuratmasuk()
    {
        $id = $this->input->post('edit_id');
        $tglsurat = $this->input->post('edttglsuratmasuk');
        $nosuratmasuk = $this->input->post('edtnosuratmasuk');
        $perihal = $this->input->post('edtperihal');
        $asalsurat = $this->input->post('edtasalsurat');
        $uploadsurat = $_FILES['edtimgsurat']['name'];
        $config['upload_path'] = 'assets/images/surat';
        $config['allowed_types'] = 'jpg|jpeg|png|gif|bmp';
        // $config['encrypt_name'] = TRUE;
        $config['file_name'] = 'sukema_suratmasuk_' . date('Ymd_h:i:s A');
        $config['maxsize'] = '2000';

        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('edtimgsurat')) {
            $data = [
                'tgl_suratmasuk' => $tglsurat,
                'no_suratmasuk' => $nosuratmasuk,
                'perihal' => $perihal,
                'asal_surat' => $asalsurat,
            ];

            $this->enhamodel->updatesuratmasuk($data, $id);
            $this->session->set_flashdata('message', 'Surat masuk berhasil ubah');
            redirect('sukema/suratmasuk');
        } else {
            $surat['item'] = $this->enhamodel->getSuratMasukById($id);
            $path = FCPATH . 'assets/images/surat/' . $surat['item']['img_surat'];
            if (file_exists($path)) {
                unlink($path);
            }

            $uploadsurat['img_surat'] = $this->upload->data('file_name');

            $data = [
                'tgl_suratmasuk' => $tglsurat,
                'no_suratmasuk' => $nosuratmasuk,
                'perihal' => $perihal,
                'asal_surat' => $asalsurat,
                'img_surat' => $uploadsurat,
            ];
            $this->enhamodel->updatesuratmasuk($data, $id);
            $this->session->set_flashdata('message', 'Surat masuk berhasil ubah');
            redirect('sukema/suratmasuk');
        }
    }

    public function deletesuratmasuk($id)
    {
        $surat['item'] = $this->enhamodel->getSuratMasukById($id);
        $path = FCPATH . 'assets/images/surat/' . $surat['item']['img_surat'];
        if (file_exists($path)) {
            unlink($path);
            $this->enhamodel->selectdeleteSurat($id);
            $this->session->set_flashdata('message', 'Data berhasil di hapus');
            redirect('sukema/suratmasuk');
        } else {
            $this->session->set_flashdata('error', 'Data surat gagal di hapus');
            redirect('sukema/suratmasuk');
        }
    }

    public function suratkeluar()
    {
        $this->template->load('templates/template', 'form_suratkeluar');
    }

    public function skguru()
    {
        $data['skguru'] = $this->enhamodel->getSkGuru();
        $this->template->load('templates/template', 'form_templateskguru', $data);
    }

    public function tambahskguru()
    {
        // $data['nosurat'] = getAutoNumber('enhas_sk_guru', 'no_surat', '19', 4) . "-69/A.3-YAPINDA/VII/" . date("Y");
        $this->template->load('templates/template', 'form_tambahskguru');
    }

    public function cetakskguru()
    {
        $data['korpsurat'] = $this->enhamodel->getProfile();
        $data['ttdyayasan'] = $this->enhamodel->getTtdYayasan();
        $data['skguru'] = $this->enhamodel->getSkGuru();
        $this->template->load('templates/template', 'form_cetakskguru', $data);
    }

    public function cetakpdf_korp()
    {
        $data['korpsurat'] = $this->enhamodel->getProfile();
        $data['ttdyayasan'] = $this->enhamodel->getTtdYayasan();
        $data['skguru'] = $this->enhamodel->getSkGuru();
        // $date = strtotime($data['skguru'][0]['tgl_surat']);
        // $newdate = format_indo(date("Y-m-d", $date));
        // var_dump($newdate);die();
        $content = $this->load->view('form_cetaksurat_korp', $data, true);
        genPdf($content, 'sukema_skguru_' . str_replace(' ', '', $data['skguru'][0]['nama_guru']) . '_' . date('Y'), 'F4', 'portrait');
    }
}
