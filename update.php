<?php
session_start();
include("connection.php");

$query="UPDATE logindetails SET diary ='".mysqli_real_escape_string($link,$_POST['diary'])."' WHERE id='".$_SESSION['id']."' LIMIT 1";
 mysqli_query($link,$query);
 date_default_timezone_set('Asia/Calcutta');

$querya="UPDATE logindetails SET last ='".date('Y-m-d h:i:s')."' WHERE id='".$_SESSION['id']."' LIMIT 1";
 mysqli_query($link,$querya);
?>
