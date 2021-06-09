<?php
//include ('includes/barcode128.php');
require_once __DIR__.'/src/Barcode128.class.php';
require_once '../phpqrcode/qrlib.php';

//Database connection
$con = mysqli_connect('localhost','root','','cert_gen');

$query = "select * from certificates";
$fetch = mysqli_query($con,$query);
While($row=mysqli_fetch_array($fetch))
{
//Get image and write text
$img = imagecreatefrompng("privatetmp.png");
$color = imagecolorallocate($img, 0, 0, 0);   //OBJ, RGB 19, 21, 22
$font = "C:\Windows\Fonts\Arial.ttf";
$bold = "C:\Windows\Fonts\Arialbd.ttf";
//$bold = "C:\Windows\Fonts\ariblk.ttf"; 

/*Labels
$confirm = "This Certificate confirms that the vehicle has been fitted with ";
with Anti-Theft Alarm Device
with GPS/GSM/GPRS Tracking System
imagettftext(
    $img,   //image object
    8.5,     //font size
    0,      //angle
    20, 238,  //X, Y cordinates
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
    $bold,  //font to use
    $registrationlbl
);
$modellbl = "MODEL       : ";
imagettftext(
    $img,   //image object
    9,     //font size
    0,      //angle
    70, 260,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
    $modellbl
);
$datelbl = "DATE       : ";
imagettftext(
    $img,   //image object
    9,     //font size
    0,      //angle
    70, 290,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
    $datelbl
);
$namelbl = "NAME       : ";
imagettftext(
    $img,   //image object
    9,     //font size
    0,      //angle
    70, 320,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
    $namelbl
);
$colorlbl = "COLOUR       : ";
imagettftext(
    $img,   //image object
    9,     //font size
    0,      //angle
    70, 350,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
    $colorlbl
);
$telephonelbl = "TELEPHONE       : ";
imagettftext(
    $img,   //image object
    9,     //font size
    0,      //angle
    70, 380,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
    $telephonelbl
);
$validitylbl = "The validity of tis certificate is for the duration of        ";
imagettftext(
    $img,   //image object
    9,     //font size
    0,      //angle
    20, 49,  //X, Y cordinates
    $color, //font color
    $font,  //font to use
    $validitylbl
);
*/

//fields
$cert = $row['certNo'];
$certNo = "Unique". " ". $cert;
imagettftext(
    $img,   //image object
    26,     //font size
    0,      //angle
    225, 176,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
//  $txt,   //text to write
    $certNo
);


$device = "with". " ". $row['device'];
imagettftext(
    $img,   //image object
    32.5,     //font size
    0,      //angle
    1437, 1069,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
//  $txt,   //text to write
    $device
);

$reg = $row['reg'];
imagettftext(
    $img,   //image object
    32.5,     //font size
    0,      //angle
    1036, 1213,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
//  $txt,   //text to write
    $reg
);

$model = $row['model'];
imagettftext(
    $img,   //image object
    32.5,     //font size
    0,      //angle
    1036, 1355,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
//  $txt,   //text to write
    $model
);
//date('F d, Y')
$date = date('d/m/Y');
imagettftext(
    $img,   //image object
    32.5,     //font size
    0,      //angle
    1036, 1496,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
    $date
);

$name = $row['cname'];
//apply word wrap on the name
$wrap_name = wordwrap($name, 50, "\n");
imagettftext(
    $img,   //image object
    32.5,     //font size
    0,      //angle
    1036, 1638,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
//  $txt,   //text to write
    $wrap_name
);

$col = $row['color'];
imagettftext(
    $img,   //image object
    32.5,     //font size
    0,      //angle
    1036, 1800,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
//  $txt,   //text to write
    $col
);

$tel = $row['tel'];
imagettftext(
    $img,   //image object
    32.5,     //font size
    0,      //angle
    1036, 1920,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
//  $txt,   //text to write
    $tel
);

$db_years = $row['years'];

if($db_years == 1){
    $year = $db_years." ". "Year";
    imagettftext(
    $img,   //image object
    32.5,     //font size
    0,      //angle
    1365, 2063,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
//  $txt,   //text to write
    $year
);
}elseif ($db_years >= 2) {
    $years = $db_years." ". "Years";
    imagettftext(
    $img,   //image object
    32.5,     //font size
    0,      //angle
    1365, 2063,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
//  $txt,   //text to write
    $years
    );

}else{
    $null_years = "";
    imagettftext(
    $img,   //image object
    32.5,     //font size
    0,      //angle
    1365, 2063,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
    //  $txt,   //text to write
    $null_years
    );
}


$db_months = $row['months'];

if($db_months == 1){
    $month = $db_months." ". "Month";
    imagettftext(
        $img,   //image object
        32.5,     //font size
        0,      //angle
        1555, 2063,  //X, Y cordinates
        $color, //font color
        $bold,  //font to use
    //  $txt,   //text to write
        $month
    );
}elseif($db_months >= 2){
    $months = $db_months." ". "Months";
    imagettftext(
        $img,   //image object
        32.5,     //font size
        0,      //angle
        1555, 2063,  //X, Y cordinates
        $color, //font color
        $bold,  //font to use
    //  $txt,   //text to write
        $months
    );
}else{
    $null_month = "";
    imagettftext(
    $img,   //image object
    32.5,     //font size
    0,      //angle
    1555, 2063,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
    //  $txt,   //text to write
    $null_month
    );
}

imagettftext(
    $img,   //image object
    32.5,     //font size
    0,      //angle
    1770, 2063,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
    //  $txt,   //text to write
    "as from"
    );

$from = $row['periodFrom'];
imagettftext(
    $img,   //image object
    32.5,     //font size
    0,      //angle
    230, 2203,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
//  $txt,   //text to write
    $from
);

$to = "to ".$row['periodTo'];
imagettftext(
    $img,   //image object
    32.5,     //font size
    0,      //angle
    463, 2203,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
//  $txt,   //text to write
    $to
);

$name = $row['cname'];
$no_space=str_replace(" ", "", $name);
$repeat = str_repeat($no_space, 10);
imagettftext(
    $img,   //image object
    10,     //font size
    0,      //angle
    1405, 2783,  //X, Y cordinates
    $color, //font color
    $font,  //font to use
//  $txt,   //text to write
    $repeat
);
/*
imagettftext(
    $img,   //image object
    32.5,     //font size
    0,      //angle
    1600, 2203,  //X, Y cordinates
    $color, //font color
    $bold,  //font to use
//  $txt,   //text to write
    $si
);
*/

//output bulk files 
header("Content-type: image/png");

//imagepng($img); //output single file to browser
//imagepng($img, "files/$name.png"); //file names from DB

//change '/' to '-' before saving
$ren = str_replace('/','-',$cert);
imagepng($img, "files/$ren.png");
imagedestroy($img); //free up memory

//QR CODE
$file = 'qr/'.$ren.'.png';
$qr_content = $certNo;
//save qr as a png file
QRcode::png($qr_content, $file);
//RESIZE QR CODE
$pat = 'qrsize/'.$ren.'.png';
$imgbar = imagecreatefrompng($file);
$imgResized = imagescale($imgbar,250,250);
imagepng($imgResized, $pat);
//

//BAR CODE
// Text to be converted
$code = "PN/20-".date("y")."/".rand(6,9)."".rand(0,9)."".rand(0,9)."".rand(0,9);

// Text printed above the barcode
//$text = 'BarCode128';

// A font file located in the same directory
// http://openfontlibrary.org/en/font/hans-kendrick
//$font = __DIR__."/data/HansKendrick-Regular.ttf";
$font = "C:\Windows\Fonts\Arialbd.ttf";

// corresponding fontsize in px
$fontSize = 24;

// height of the barcode in px
$height = 128;

// create an Object of BarCode128 Class
$barcode = new AMWD\BarCode128($code, $height);

// OPTIONAL: add the font
// if not: no Text can be written (only bars)
$barcode->addFont($font, $fontSize);

// OPTIONAL: add the text above the barcode
//$barcode->CustomText($text);

// Save the file to disk
$pa =  'barcode/'.$ren.'.png';
$barcode->save($pa);

// OR: Draw the image to stdout
//$barcode->draw();


}


header('location: qr.php');



?>