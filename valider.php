<?php
require "connection.php";

$user=$_POST['user'];
$psw=$_POST['psw'];
$req="insert into user values('$fn','$email')";
if($cnx->query($req)==true)
echo"insertion ok";
else
echo"insertion not ok";
?>