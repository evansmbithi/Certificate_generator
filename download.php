<?php
require('vendor/autoload.php');

class Download{
    
    //convert web page to pdf
    public function print(){
         
        $mpdf = new \Mpdf\Mpdf();

        //display images dynamically
        $glob = glob("files/*.jpg");

        foreach ($glob as $filename){
            $certs= "<img src='$filename' style='page-break-after: always'; width: 100% />";
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


