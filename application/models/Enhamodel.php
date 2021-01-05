<?php
class Enhamodel extends CI_Model{
  
    private $tbprofile = 'enhas_profile';
    private $tbsignaturekamad = 'enhas_signature_kamad';
    private $tbsignaturetu = 'enhas_signature_tatausaha';
    private $tbsignaturebendahara = 'enhas_signature_bendahara';
    private $tbsignaturekomite = 'enhas_signature_komite';
    private $tbsignatureyayasan = 'enhas_signature_yayasan';
    private $tbsuratmasuk = 'enhas_surat_masuk';


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

    /* this is fr surat masuk models */

    public function getSuratMasuk()
    {
       return $this->db->get($this->tbsuratmasuk)->result_array();
    }
    
    public function getSuratMasukById($id)
    {
        return $this->db->get_where($this->tbsuratmasuk, ['id_suratmasuk' => $id])->row_array();
    }

    /* Inputt */
    public function inputsuratmasuk($data)
    {
        $this->db->insert($this->tbsuratmasuk, $data);
    }
    

    /* Edit */
   
    public function updatedataruntext($data)
    {
        $this->db->replace($this->tbruntext, $data);
    }

    public function updatedataprofile($data, $id)
    {
        $this->db->where('id_profile', $id);
        $this->db->update($this->tbprofile, $data,  ['id_profile' => $id]);
        return true;
    }

      public function updatettdkamad($data, $id)
    {
        $this->db->where('id_kamad', $id);
        $this->db->update($this->tbsignaturekamad, $data,  ['id_kamad' => $id]);
        return true;
    }

     public function updatettdtatausaha($data, $id)
    {
        $this->db->where('id_tatausaha', $id);
        $this->db->update($this->tbsignaturetu, $data,  ['id_tatausaha' => $id]);
        return true;
    }

    public function updatettdbendahara($data, $id)
    {
        $this->db->where('id_bendahara', $id);
        $this->db->update($this->tbsignaturebendahara, $data,  ['id_bendahara' => $id]);
        return true;
    }

    public function updatettdkomite($data, $id)
    {
        $this->db->where('id_komite', $id);
        $this->db->update($this->tbsignaturekomite, $data,  ['id_komite' => $id]);
        return true;
    }

    public function updatettdyayasan($data, $id)
    {
        $this->db->where('id_yayasan', $id);
        $this->db->update($this->tbsignatureyayasan, $data,  ['id_yayasan' => $id]);
        return true;
    }

    public function updatesuratmasuk($data, $id)
    {
        $this->db->where('id_suratmasuk', $id);
        $this->db->update($this->tbsuratmasuk, $data,  ['id_suratmasuk' => $id]);
        return true;
    }

 /*   delete */
    public function selectdeleteSurat($id)
    {
        return $this->db->delete($this->tbsuratmasuk, ['id_suratmasuk' => $id]);
    }
}