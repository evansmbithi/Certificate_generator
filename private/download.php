<?php
//require('vendor/autoload.php');
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




/*
class Download{
    
    //convert web page to pdf
    public function print(){
         
        $mpdf = new \Mpdf\Mpdf();

        //display images dynamically
        $glob = glob("result/*.png");

        foreach ($glob as $filename){
            $certs= "<img src='$filename' style='page-break-after: always'; margin: 0; padding: 0; width: 100% />";
            //echo $certs . "<br>";
            $mpdf->WriteHTML($certs);
            
        };

        //save file as current date-time
        $file = date('d-m-Y H:i:s').'.pdf';

        // root directory on the server 
        //$mpdf->Output($file, \Mpdf\Output\Destination::FILE); //downloads to server
        
        $mpdf->Output($file, "D"); //downloads to local storage
        //$this->del();    
    }

}

$download = new Download();
$download->print();

*/



