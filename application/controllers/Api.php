<?php
defined('BASEPATH') or exit('No direct script access allowed');

use chriskacerguis\RestServer\RestController;

class Api extends RestController
{
    function __construct()
    {
        // Construct the parent class
        parent::__construct();
        $this->load->model('Enhamodel');
    }

    public function suratmasuk_get()
    {
        $id = $this->get('id');

        if ($id === null) {
            $suratmasuk = $this->Enhamodel->getSuratMasuk();
        } else {
            $suratmasuk = $this->Enhamodel->getSuratMasuk($id);
        }

        if ($suratmasuk) {
            $this->response(
                [
                    'status' => true,
                    'message' => 'success',
                    'suratmasuk' => $suratmasuk,
                ],
                RestController::HTTP_OK,
            );
        } else {
            $this->response(
                [
                    'status' => false,
                    'message' => 'failed',
                ],
                RestController::HTTP_NOT_FOUND,
            );
        }
    }

    /* Surat Keluar API */

    public function suratkeluar_get()
    {
        $id = $this->get('id');

        if ($id === null) {
            $suratkeluar = $this->Enhamodel->getSuratKeluar();
        } else {
            $suratkeluar = $this->Enhamodel->getSuratKeluar($id);
        }

        if ($suratkeluar) {
            $this->response(
                [
                    'status' => true,
                    'message' => 'success',
                    'suratkeluar' => $suratkeluar,
                ],
                RestController::HTTP_OK,
            );
        } else {
            $this->response(
                [
                    'status' => false,
                    'message' => 'failed',
                ],
                RestController::HTTP_NOT_FOUND,
            );
        }
    }

    public function suratkeluar_delete()
    {
        $id = $this->delete('id');
        if ($id === null) {
            $this->response(
                [
                    'status' => false,
                    'message' => 'provide an id',
                ],
                RestController::HTTP_BAD_REQUEST,
            );
        } else {
            if ($this->Enhamodel->deleteSuratKeluar($id) > 0) {
                $this->response(
                    [
                        'status' => true,
                        'message' => 'Surat Keluar Terhapus',
                    ],
                    RestController::HTTP_OK,
                );
            } else {
                $this->response(
                    [
                        'status' => false,
                        'message' => 'id not found',
                    ],
                    RestController::HTTP_NOT_FOUND,
                );
            }
        }
    }

    public function suratkeluar_post()
    {
        $datasurat = [
            'id' => $this->post('id'),
            'no_surat' => $this->post('no_surat'),
            'perihal' => $this->post('perihal'),
            'lampiran' => $this->post('lampiran'),
            'tujuan' => $this->post('tujuan'),
            'thn_ajaran' => $this->post('thn_ajaran'),
            'tanggal_surat' => $this->post('tanggal_surat'),
            'jenjang' => $this->post('jenjang'),
        ];

        if ($this->Enhamodel->inputsuratkeluar('enhas_surat_keluar', $datasurat) > 0) {
            $this->response(
                [
                    'status' => true,
                    'message' => 'Surat Keluar Berhasil Ditambahkan',
                ],
                RestController::HTTP_CREATED,
            );
        } else {
            $this->response(
                [
                    'status' => false,
                    'message' => 'Surat Keluar Gagal Ditambahkan',
                ],
                RestController::HTTP_BAD_REQUEST,
            );
        }
    }

    public function suratkeluar_put()
    {
        $id = $this->put('id');
        $data = [
            'id' => $this->put('id'),
            'no_surat' => $this->put('no_surat'),
            'perihal' => $this->put('perihal'),
            'lampiran' => $this->put('lampiran'),
            'tujuan' => $this->put('tujuan'),
            'thn_ajaran' => $this->put('thn_ajaran'),
            'tanggal_surat' => $this->put('tanggal_surat'),
            'jenjang' => $this->put('jenjang'),
        ];

        if ($this->Enhamodel->updatesuratkeluar('enhas_surat_keluar', $data, $id) > 0) {
            $this->response(
                [
                    'status' => true,
                    'message' => 'Surat Keluar Berhasil Diupdate',
                ],
                RestController::HTTP_OK,
            );
        } else {
            $this->response(
                [
                    'status' => false,
                    'message' => 'Surat Keluar Gputagal Diupdate',
                ],
                RestController::HTTP_BAD_REQUEST,
            );
        }
    }

    /* SK Yayasan */
    public function skyayasan_get()
    {
        $id = $this->get('id');

        if ($id === null) {
            $skyayasan = $this->Enhamodel->getSkYayasan();
        } else {
            $skyayasan = $this->Enhamodel->getSkYayasan($id);
        }

        if ($skyayasan) {
            $this->response(
                [
                    'status' => true,
                    'message' => 'success',
                    'skyayasan' => $skyayasan,
                ],
                RestController::HTTP_OK,
            );
        } else {
            $this->response(
                [
                    'status' => false,
                    'message' => 'failed',
                ],
                RestController::HTTP_NOT_FOUND,
            );
        }
    }

    public function skyayasan_delete()
    {
        $id = $this->delete('id');
        if ($id === null) {
            $this->response(
                [
                    'status' => false,
                    'message' => 'provide an id',
                ],
                RestController::HTTP_BAD_REQUEST,
            );
        } else {
            if ($this->Enhamodel->deleteSkYayasan($id) &&  $this->Enhamodel->deleteSuratKeluar($id) > 0) {
                $this->response(
                    [
                        'status' => true,
                        'message' => 'SK Sudah dihapus!',
                    ],
                    RestController::HTTP_OK,
                );
            } else {
                $this->response(
                    [
                        'status' => false,
                        'message' => 'id not found',
                    ],
                    RestController::HTTP_NOT_FOUND,
                );
            }
        }
    }

    public function skyayasan_post()
    {
        $data = [
            'id' => $this->post('id'),
            'no_surat' => $this->post('no_surat'),
            'perihal' => $this->post('perihal'),
            'lampiran' => $this->post('lampiran'),
            'thn_ajaran' => $this->post('thn_ajaran'),
            'tanggal_surat' => $this->post('tanggal_surat'),
            'nama_guru' => $this->post('nama_guru'),
            'tgl_kesanggupan' => $this->post('tgl_kesanggupan'),
            'tgl_pengangkatan' => $this->post('tgl_pengangkatan'),
            'jenis_ptk' => $this->post('jenis_ptk'),
            'jenjang' => $this->post('jenjang'),
        ];

        $idsurat = $this->Enhamodel->inputskyayasan('enhas_sk_guru', $data);

        $datasurat = [
            'id' => $idsurat,
            'no_surat' => $this->post('no_surat'),
            'perihal' => $this->post('perihal'),
            'lampiran' => $this->post('lampiran'),
            'tujuan' => $this->post('tujuan'),
            'thn_ajaran' => $this->post('thn_ajaran'),
            'tanggal_surat' => $this->post('tanggal_surat'),
            'jenjang' => $this->post('jenjang'),
        ];

        $inputdata = $this->Enhamodel->inputsuratkeluar('enhas_surat_keluar', $datasurat);

        if ($inputdata > 0) {
            $this->response(
                [
                    'status' => true,
                    'message' => 'SK Berhasil Ditambahkan',
                ],
                RestController::HTTP_CREATED,
            );
        } else {
            $this->response(
                [
                    'status' => false,
                    'message' => 'SK Gagal Ditambahkan',
                ],
                RestController::HTTP_BAD_REQUEST,
            );
        }
    }

    public function skyayasan_put()
    {
        $id = $this->put('id');
        $data = [
            'id' => $this->put('id'),
            'no_surat' => $this->put('no_surat'),
            'perihal' => $this->put('perihal'),
            'lampiran' => $this->put('lampiran'),
            'thn_ajaran' => $this->put('thn_ajaran'),
            'tanggal_surat' => $this->put('tanggal_surat'),
            'nama_guru' => $this->put('nama_guru'),
            'tgl_kesanggupan' => $this->put('tgl_kesanggupan'),
            'tgl_pengangkatan' => $this->put('tgl_pengangkatan'),
            'jenis_ptk' => $this->put('jenis_ptk'),
            'jenjang' => $this->put('jenjang'),
        ];

        $idsurat = $this->Enhamodel->updateskyayasan('enhas_sk_guru', $data, $id);

        $datasurat = [
            'id' => $this->put('id'),
            'no_surat' => $this->put('no_surat'),
            'perihal' => $this->put('perihal'),
            'lampiran' => $this->put('lampiran'),
            'tujuan' => $this->put('tujuan'),
            'thn_ajaran' => $this->put('thn_ajaran'),
            'tanggal_surat' => $this->put('tanggal_surat'),
            'jenjang' => $this->put('jenjang'),
        ];

        $updatedata = $this->Enhamodel->updatesuratkeluar('enhas_surat_keluar', $datasurat, $id);

        if ($updatedata > 0) {
            $this->response(
                [
                    'status' => true,
                    'message' => 'SK Berhasil Diupdate',
                ],
                RestController::HTTP_OK,
            );
        } else {
            $this->response(
                [
                    'status' => false,
                    'message' => 'SK Gagal Diupdate',
                ],
                RestController::HTTP_BAD_REQUEST,
            );
        }
    }

    public function gettoken_get()
    {
        $token = $this->get('token');
        $datatoken = $this->Enhamodel->getToken($token);

        if ($datatoken) {
            $this->response(
                [
                    'status' => true,
                    'message' => 'success',
                    'token' => $datatoken,
                ],
                RestController::HTTP_OK,
            );
        } else {
            $this->response(
                [
                    'status' => false,
                    'message' => 'token not found!',
                ],
                RestController::HTTP_NOT_FOUND,
            );
        }
    }
}
