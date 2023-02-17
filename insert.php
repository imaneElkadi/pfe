<?php
require "connection.php";
$fn=$_POST['fullname'];
$email=$_POST['email'];
$dtns=$_POST['dateNaissance'];
$user=$_POST['user'];
$psw=$_POST['psw'];
$req="insert into user values('$fn','$email','$dtns','$user','$psw')";
if($cnx->query($req)==true)
echo"insertion ok";
else
echo"insertion not ok";
?>