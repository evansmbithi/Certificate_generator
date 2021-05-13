<?php
class Del{
    public function delete(){
    //delete records
    $con = mysqli_connect("localhost","root","","cert_gen");
    $sql = "truncate table certificates";
    //$query= 
    mysqli_query($con,$sql);

    //if($query){
    $delay = time() + 60;
    echo $delay;

        //delete files
        $path = "files";
        $files = glob($path.'/*');

        foreach($files as $file){ 
            //echo "deleted";
            unlink($file);
            
        }        
    }
}
