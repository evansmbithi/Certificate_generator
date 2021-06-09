<?php
require '../includes/fpdf/fpdf.php';

$pdf = new FPDF();

 //display images dynamically
 $glob = glob("result/*.png");

 foreach ($glob as $filename){
     //echo $filename;
    $pdf->AddPage();
    $pdf->Image($filename, 0,0,210,297);
    
 };

 $pdf->output();







