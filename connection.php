<?php
$servername='localhost';
$username='root';
$psw='';
$bd='theontha';
$cnx= new mysqli($servername,$username,$psw,$bd);
if($cnx->connect_error)
die("error:$cnx->connect_error");

?>