<?php

function generateCSVFile($heading_array, $data_array, $filename)
{
    header('Content-Type: application/excel');
    header('Content-Disposition: attachment; filename="' . $filename . '.csv"');
    //initiate file download
    $fp = fopen('php://output', 'wb');
    fputcsv($fp, $heading_array, ',');
    foreach ($data_array as $data_row) {
        fputcsv($fp, $data_row, ',');
    }
    fclose($fp);
}
/*
Use case
$heading_array =array('firstname','lastname');
$data = array(array('niyi','philip'),array('ola','dare'));

generateCSVFile($heading_array,$data,'mycsvfilename');
*/
?>