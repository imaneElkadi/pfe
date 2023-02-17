<?php
require "connection.php";

$user=$_POST['user'];
$psw=$_POST['psw'];
$req="insert into user values('$user','$psw')";
$req2="select user,password from newclient where user='$user' and password='$psw'";
$a=$cnx->query($req);
$b=$cnx->query($req2);
if(($a==true)&&($b==true))
echo" ok";
else
echo" not ok";

?>