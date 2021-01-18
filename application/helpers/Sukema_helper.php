<?php
// defined('BASEPATH') or exit('No direct script access allowed');
use Dompdf\Dompdf;
use Dompdf\Options;

function genPdf($content='', $filename='sukema_skguru', $size='legal', $orientation='portrait', $attachment=false)
{
    $options = new Options();
    $options->setIsRemoteEnabled(TRUE);
    $options->setIsHtml5ParserEnabled(true);

// instantiate and use the dompdf class
    $dompdf = new Dompdf($options);
    $dompdf->loadHtml(utf8_decode($content));

// (Optional) Setup the paper size and orientation
    $dompdf->setPaper($size, $orientation);

// Render the HTML as PDF
    $dompdf->render();

// Output the generated PDF to Browser
    $dompdf->stream($filename, ['Attachment' => $attachment]);
// $dompdf->stream($filename, array("Attachment" => false));
}


function getAutoNumber($table, $field, $pref, $length, $where = "")
{
    $ci = &get_instance();
    $query = "SELECT IFNULL(MAX(CONVERT(MID($field," . (strlen($pref) + 1) . "," . ($length - strlen($pref)) . "),UNSIGNED INTEGER)),0)+1 AS NOMOR
                FROM $table WHERE LEFT($field," . (strlen($pref)) . ")='$pref' $where";
    $result = $ci->db->query($query)->row();
    $zero = "";
    $num = $length - strlen($pref) - strlen($result->NOMOR);
    for ($i = 0; $i < $num; $i++) {
        $zero = $zero . "0";
    }
    return $pref . $zero . $result->NOMOR;
}



if (!function_exists('date_indo')) {
  function date_indo($date){
    date_default_timezone_set('Asia/Jakarta');
    // array hari dan bulan
    // $Hari = array("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
    $Bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
    
    // pemisahan tahun, bulan, hari, dan waktu
    $tahun = substr($date,0,4);
    $bulan = substr($date,5,2);
    $tgl = substr($date,8,2);
    $waktu = substr($date,11,5);
    // $hari = date("w",strtotime($date));
    // $result = $Hari[$hari].", ".$tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ".$waktu;
    $result = $tgl." ".$Bulan[(int)$bulan-1]." ".$tahun." ".$waktu;

    return $result;
  }
}