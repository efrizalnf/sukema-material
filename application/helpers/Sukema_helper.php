<?php

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