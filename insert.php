<?php
require_once "delete.php";

//delete initial files
$delete = new Del();
$delete->delete();

$con = mysqli_connect("localhost", "root", "", "cert_gen");

$count = count($_POST['cname']);

for($i=0; $i<$count; $i++){
    $sql = "INSERT INTO `certificates`(`cname`, `model`, `reg`, `color`, `tel`) VALUES ('{$_POST['cname'][$i]}', '{$_POST['model'][$i]}', '{$_POST['reg'][$i]}', '{$_POST['color'][$i]}', '{$_POST['tel'][$i]}')";
    $con->query($sql);
}

header('location: certificate.php');
?>