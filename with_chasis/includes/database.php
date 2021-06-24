<?php
$con=mysqli_connect('localhost','root','','cert_gen');

if(mysqli_connect_errno())
{
    echo 'Failed to connect to server'.mysqli_connect_error();
}

?>