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
        }else{
              $this->response(
                [
                    'status' => false,
                    'message' => 'failed',
                ],
                RestController::HTTP_NOT_FOUND,
            );
        }
    }

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
        }else{
              $this->response(
                [
                    'status' => false,
                    'message' => 'failed',
                ],
                RestController::HTTP_NOT_FOUND,
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
        }else{
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
