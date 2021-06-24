<?php
class Del{
    public function delete(){
    //delete records
    $con = mysqli_connect("localhost","root","","cert_gen");
    $sql = "truncate table certificates";
    //$query= 
    mysqli_query($con,$sql);

   

        //delete files
        $path1 = "files";
        $files = glob($path1.'/*');

        foreach($files as $file){ 
            //echo "deleted";
            unlink($file);
            
        }   
        
        $path2 = "barcode";
        $barcode = glob($path2.'/*');

        foreach($barcode as $barcode){ 
            //echo "deleted";
            unlink($barcode);
            
        }
        
        $path3 = "qrsize";
        $qrsize = glob($path3.'/*');

        foreach($qrsize as $qrsize){ 
            //echo "deleted";
            unlink($qrsize);
            
        } 

        $path4 = "qr";
        $qr = glob($path4.'/*');

        foreach($qr as $qr){ 
            //echo "deleted";
            unlink($qr);
            
        } 

        $path5 = "qrsave";
        $qrsave = glob($path5.'/*');

        foreach($qrsave as $qrsave){ 
            //echo "deleted";
            unlink($qrsave);
            
        } 

        $path6 = "result";
        $result = glob($path6.'/*');

        foreach($result as $result){ 
            //echo "deleted";
            unlink($result);
            
        } 
    }
}

/*
$delete = new Del();
$delete->delete();
*/