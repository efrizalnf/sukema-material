<?php
class Enhamodel extends CI_Model
{
    private $tbprofile = 'enhas_profile';
    private $tbsignaturekamad = 'enhas_signature_kamad';
    private $tbsignaturetu = 'enhas_signature_tatausaha';
    private $tbsignaturebendahara = 'enhas_signature_bendahara';
    private $tbsignaturekomite = 'enhas_signature_komite';
    private $tbsignatureyayasan = 'enhas_signature_yayasan';
    private $tbsuratmasuk = 'enhas_surat_masuk';
    private $tbsuratkeluar = 'enhas_surat_keluar';
    private $tbskguru = 'enhas_sk_guru';
    private $tbtoken = 'enhas_token';

    /* Get Data */

    public function getGuru()
    {
        $query = $this->db->get($this->tbguru);
        return $query->result();
    }

    public function getCountFile()
    {
        $query = $this->db->get($this->tbfiles);
        return $query->result();
    }

    /* Edt Profile */
    public function getProfile()
    {
        return $this->db->get($this->tbprofile)->first_row();
    }

    public function getProfileById($id)
    {
        return $this->db->get_where($this->tbprofile, ['id_profile' => $id])->row_array();
    }

    /* This is signature models */

    public function getTtdKamad()
    {
        return $this->db->get($this->tbsignaturekamad)->first_row();
    }

    public function getTtdTatausaha()
    {
        return $this->db->get($this->tbsignaturetu)->first_row();
    }

    public function getTtdBendahara()
    {
        return $this->db->get($this->tbsignaturebendahara)->first_row();
    }

    public function getTtdKomite()
    {
        return $this->db->get($this->tbsignaturekomite)->first_row();
    }

    public function getTtdYayasan()
    {
        return $this->db->get($this->tbsignatureyayasan)->first_row();
    }

    public function getSuratMasukById($id)
    {
        return $this->db->get_where($this->tbsuratmasuk, ['id_suratmasuk' => $id])->row_array();
    }

    public function getSkGuru()
    {
        return $this->db->get($this->tbskguru)->result_array();
    }

    public function getSkGuruById($id)
    {
        return $this->db->get_where($this->tbskguru, ['id' => $id])->row_array();
    }

    /* Inputt */
    public function inputsuratmasuk($data)
    {
        $this->db->insert($this->tbsuratmasuk, $data);
        return $this->db->affected_rows();
    }

    /* Edit */

    public function updatedataruntext($data)
    {
        $this->db->replace($this->tbruntext, $data);
    }

    public function updatedataprofile($data, $id)
    {
        $this->db->where('id_profile', $id);
        $this->db->update($this->tbprofile, $data, ['id_profile' => $id]);
        return true;
    }

    public function updatettdkamad($data, $id)
    {
        $this->db->where('id_kamad', $id);
        $this->db->update($this->tbsignaturekamad, $data, ['id_kamad' => $id]);
        return true;
    }

    public function updatettdtatausaha($data, $id)
    {
        $this->db->where('id_tatausaha', $id);
        $this->db->update($this->tbsignaturetu, $data, ['id_tatausaha' => $id]);
        return true;
    }

    public function updatettdbendahara($data, $id)
    {
        $this->db->where('id_bendahara', $id);
        $this->db->update($this->tbsignaturebendahara, $data, ['id_bendahara' => $id]);
        return true;
    }

    public function updatettdkomite($data, $id)
    {
        $this->db->where('id_komite', $id);
        $this->db->update($this->tbsignaturekomite, $data, ['id_komite' => $id]);
        return true;
    }

    public function updatettdyayasan($data, $id)
    {
        $this->db->where('id_yayasan', $id);
        $this->db->update($this->tbsignatureyayasan, $data, ['id_yayasan' => $id]);
        return true;
    }

    public function updatesuratmasuk($data, $id)
    {
        $this->db->where('id_suratmasuk', $id);
        $this->db->update($this->tbsuratmasuk, $data, ['id_suratmasuk' => $id]);
        return true;
    }

    /*   delete */
    public function selectdeleteSurat($id)
    {
        return $this->db->delete($this->tbsuratmasuk, ['id_suratmasuk' => $id]);
    }


    /* ====================================================================== */

    /* API MODELS */
    /* GET */
    public function getSuratMasuk($id = null)
    {
        if ($id === null) {
            return $this->db->get($this->tbsuratmasuk)->result_array();
        } else {
            return $this->db->get_where($this->tbsuratmasuk, ['id' => $id])->result_array();
        }
    }

    public function getSuratKeluar($id = null)
    {
        if ($id === null) {
            return $this->db->get($this->tbsuratkeluar)->result_array();
        } else {
            return $this->db->get_where($this->tbsuratkeluar, ['id
            ' => $id])->result_array();
        }
    }

    public function getSkYayasan($id = null)
    {
        if ($id === null) {
            return $this->db->get($this->tbskguru)->result_array();
        } else {
            return $this->db->get_where($this->tbskguru, ['id' => $id])->result_array();
        }
    }

    public function getToken($token)
    {
        return $this->db->get_where($this->tbtoken, ['token' => $token])->result_array();
    }

    /* INPUT */
    public function inputsuratkeluar($table,$datasurat)
    {
        $this->db->insert($table, $datasurat);
        return $this->db->insert_id();
    }

    public function inputskyayasan($table, $data)
    {
        $this->db->insert($table, $data);
        return $this->db->insert_id();
    }

    /* UPDATE  */

    public function updatesuratkeluar($table, $data, $id)
    {
        $this->db->update($table, $data, ['id' => $id]);
        return $this->db->affected_rows();
    }
    public function updateskyayasan($table, $data, $id)
    {
        $this->db->update($table, $data, ['id' => $id]);
        return $this->db->affected_rows();
    }

    /* DELETE */

    public function deleteSuratKeluar($id)
    {
        $this->db->delete($this->tbsuratkeluar, ['id' => $id]);
        return $this->db->affected_rows();
    }
    public function deleteSkYayasan($id)
    {
        $this->db->delete($this->tbskguru, ['id' => $id]);
        return $this->db->affected_rows();
    }
}

/* END API MODELS */
