<?php
include '../includes/database.php';
require_once "delete.php";

//delete initial files
$delete = new Del($con);
$delete->delete();

//$con = mysqli_connect("localhost", "root", "", "cert_gen");

$count = count($_POST['cname']);

for($i=0; $i<$count; $i++){
    $sql = "INSERT INTO `certificates`(`certNo`, `device`, `reg`, `chasis`, `engine`, `model`, `cname`,  `color`, `tel`, `years`, `months`, `periodFrom`, `periodTo`) VALUES ('{$_POST['certNo'][$i]}', '{$_POST['device'][$i]}', '{$_POST['reg'][$i]}', '{$_POST['chasis'][$i]}', '{$_POST['engine'][$i]}','{$_POST['model'][$i]}', '{$_POST['cname'][$i]}', '{$_POST['color'][$i]}', '{$_POST['tel'][$i]}', '{$_POST['years'][$i]}', '{$_POST['months'][$i]}', '{$_POST['periodFrom'][$i]}', '{$_POST['periodTo'][$i]}')";
    $con->query($sql);
}

header('location: wait.html');
?>