<?php
$con = mysqli_connect('localhost','root','','cert_gen');

$query = "select * from certificates";
$fetch = mysqli_query($con,$query);
While($row=mysqli_fetch_array($fetch))
{
    $cert = $row['certNo'];
    $ren = str_replace('/','-',$cert);
    $fileimg = $ren.".png";
    $qrimg = $ren.".png";
    
    //$image1 = "private.png";
    $image1 = "files/".$fileimg;
    $image2 = "qrsize/".$qrimg;
    
    //
    list($width,$height) = getimagesize($image2);

    $image1 = imagecreatefromstring(file_get_contents($image1));
    $image2 = imagecreatefromstring(file_get_contents($image2));

    imagecopymerge($image1, $image2, 150, 550, 0, 0, $width, $height, 100);
    header('Content-Type: image/png');
    //imagepng($image1);
    imagepng($image1, "qrsave/$ren.png");
    imagedestroy($image1);
    imagedestroy($image2);
    
}

header('location: bar.php');



