<?php 
$password = password_hash("mansur", PASSWORD_DEFAULT);
echo $password;
echo password_verify($password, "mansur");
?>