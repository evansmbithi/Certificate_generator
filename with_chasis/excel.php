<?php
include 'includes/database.php';

$uploadfile=$_FILES['uploadfile']['tmp_name']; //fetches the upload file

require 'includes/PHPExcel/Classes/PHPExcel.php';
require_once 'includes/PHPExcel/Classes/PHPExcel/IOFactory.php';
require_once "delete.php";

//delete initial files
$delete = new Del();
$delete->delete();

$objExcel=PHPExcel_IOFactory::load($uploadfile);
foreach($objExcel->getWorksheetIterator() as $worksheet)
{
    $highestrow=$worksheet->getHighestRow();

    for($row=2;$row<$highestrow;$row++){
         $certNo=$worksheet->getCellByColumnAndRow(0,$row)->getvalue();

         $reg=$worksheet->getCellByColumnAndRow(1,$row)->getvalue();

         $chasis=$worksheet->getCellByColumnAndRow(2,$row)->getvalue();

         $engine=$worksheet->getCellByColumnAndRow(3,$row)->getvalue();

         $model=$worksheet->getCellByColumnAndRow(4,$row)->getvalue();

         $date=$worksheet->getCellByColumnAndRow(5,$row)->getvalue();

         $cname=$worksheet->getCellByColumnAndRow(6,$row)->getvalue();

         $color=$worksheet->getCellByColumnAndRow(7,$row)->getvalue();

         $tel=$worksheet->getCellByColumnAndRow(8,$row)->getvalue();
         
         $device=$worksheet->getCellByColumnAndRow(9,$row)->getvalue(); 
         
         $periodFrom=$worksheet->getCellByColumnAndRow(10,$row)->getvalue();

         $years=$worksheet->getCellByColumnAndRow(11,$row)->getvalue();        
         /*         
         $months=$worksheet->getCellByColumnAndRow(8,$row)->getvalue();
         
         $periodTo=$worksheet->getCellByColumnAndRow(10,$row)->getvalue();
*/
        if($certNo!='')
        {
            // $insertqry="INSERT INTO `certificates`(`certNo`, `device`, `reg`, `model`, `date`, `cname`,  `color`, `tel`, `years`, `months`, `periodFrom`, `periodTo`) VALUES ('$certNo','$device','$reg','$model','$date','$cname','$color','$tel','$years','$months','$periodFrom','$periodTo')";
            $insertqry="INSERT INTO `certificates`(`certNo`, `device`, `reg`, `chasis`, `engine`, `model`, `date`, `cname`,  `color`, `tel`, `years`, `periodFrom`) VALUES ('$certNo','$device','$reg','$chasis','$engine','$model','$date','$cname','$color','$tel','$years','$periodFrom')";
            $insertres=mysqli_query($con,$insertqry);
        }
    }
}

header('location: wait.html');