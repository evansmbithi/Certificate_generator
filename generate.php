<?php

//Database connection
$con = mysqli_connect('localhost','root','','cert_gen');

$query = "select * from certificates";
$fetch = mysqli_query($con,$query);
While($row=mysqli_fetch_array($fetch))
{
//Get image and write text
$img = imagecreatefromjpeg("bgcert.jpg");
$color = imagecolorallocate($img, 19, 21, 22);   //OBJ, RGB
$font = "C:\Windows\Fonts\Arial.ttf";

//Labels
$confirm = "This Certificate confirms that the vehicle has been fitted with ";
imagettftext(
    $img,   //image object
    8.5,     //font size
    0,      //angle
    20, 200,  //X, Y cordinates
    $color, //font color
    $font,  //font to use
    $confirm
);
$registrationlbl = "REGISTRATION       : ";
imagettftext(
    $img,   //image object
    9,     //font size
    0,      //angle
    70, 230,  //X, Y cordinates
    $color, //font color
    $font,  //font to use
    $registrationlbl
);
$modellbl = "MODEL       : ";
imagettftext(
    $img,   //image object
    9,     //font size
    0,      //angle
    70, 260,  //X, Y cordinates
    $color, //font color
    $font,  //font to use
    $modellbl
);
$datelbl = "DATE       : ";
imagettftext(
    $img,   //image object
    9,     //font size
    0,      //angle
    70, 290,  //X, Y cordinates
    $color, //font color
    $font,  //font to use
    $datelbl
);
$namelbl = "NAME       : ";
imagettftext(
    $img,   //image object
    9,     //font size
    0,      //angle
    70, 320,  //X, Y cordinates
    $color, //font color
    $font,  //font to use
    $namelbl
);
$colorlbl = "COLOUR       : ";
imagettftext(
    $img,   //image object
    9,     //font size
    0,      //angle
    70, 350,  //X, Y cordinates
    $color, //font color
    $font,  //font to use
    $colorlbl
);
$telephonelbl = "TELEPHONE       : ";
imagettftext(
    $img,   //image object
    9,     //font size
    0,      //angle
    70, 380,  //X, Y cordinates
    $color, //font color
    $font,  //font to use
    $telephonelbl
);
$validitylbl = "The validity of tis certificate is for the duration of        ";
imagettftext(
    $img,   //image object
    9,     //font size
    0,      //angle
    20, 410,  //X, Y cordinates
    $color, //font color
    $font,  //font to use
    $validitylbl
);

//fields
//$txt = "hello world";
$reg = $row['reg'];
imagettftext(
    $img,   //image object
    10,     //font size
    0,      //angle
    200, 230,  //X, Y cordinates
    $color, //font color
    $font,  //font to use
//  $txt,   //text to write
    $reg
);

$model = $row['model'];
imagettftext(
    $img,   //image object
    10,     //font size
    0,      //angle
    200, 260,  //X, Y cordinates
    $color, //font color
    $font,  //font to use
//  $txt,   //text to write
    $model
);

$date = date('F d, Y');
imagettftext(
    $img,   //image object
    10,     //font size
    0,      //angle
    200, 290,  //X, Y cordinates
    $color, //font color
    $font,  //font to use
    $date
);

$name = $row['cname'];
imagettftext(
    $img,   //image object
    10,     //font size
    0,      //angle
    200, 320,  //X, Y cordinates
    $color, //font color
    $font,  //font to use
//  $txt,   //text to write
    $name
);

$col = $row['color'];
imagettftext(
    $img,   //image object
    10,     //font size
    0,      //angle
    200, 350,  //X, Y cordinates
    $color, //font color
    $font,  //font to use
//  $txt,   //text to write
    $col
);

$tel = $row['tel'];
imagettftext(
    $img,   //image object
    10,     //font size
    0,      //angle
    200, 380,  //X, Y cordinates
    $color, //font color
    $font,  //font to use
//  $txt,   //text to write
    $tel
);

// EXTERNAL CLASS
//output bulk files 
header("Content-type: image/jpeg");
//imagejpeg($img); //output single file to browser
imagejpeg($img, "files/$name.jpg"); //file names from DB
imagejpeg($img, "certs/$name.jpg");
imagedestroy($img); //free up memory

//
}

header('location: download.php');


/*
$sql="SELECT count(sname) AS count FROM certificates";
$fetch = mysqli_query($con,$sql);
$row = mysqli_fetch_assoc($fetch);
$count = $row['count'];
//echo $count;
*/
?>