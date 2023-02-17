<?php
require "connection.php";

$user=$_POST['user'];
$psw=$_POST['psw'];
$user_check = $cnx->query("SELECT user FROM  user WHERE user='$user'");
$psw_check = $cnx->query("SELECT password FROM  user WHERE password='$psw'");
if ($psw_check->num_rows==0 || $user_check->num_rows==0) {
    
    echo'<h3>Sorry</h3>That username  or the password does not exist in our database.<h3>create new account</h3>';
echo"<a style='   text-decoration: double; text-shadow: 2px; color: blueviolet;' href='formNew.php'>create New Account</a>";
}
    else 
    header('location:compte.php');
?>