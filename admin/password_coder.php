<?php

 #
 # MiniAdmin - password generator app
 #
 # info: main folder copyright file
 #
 # usage: php password_coder.php pass
 #
 # OR
 #
 # usage: php password_coder.php
 #        generating random password
 #

$COPYRIGHT="© 2020. <a href=https://github.com/pphome2/miniapp-admin>MiniApp-Admin</a>";

function password_generate($chars){
  $data='1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return(substr(str_shuffle($data),0,$chars));
}

if (isset($argv[1])){
	$pass=$argv[1];
}else{
	$pass=password_generate(7);
}

echo("Password: $pass \n");
echo("Password_hash function generated: ".password_hash($pass,PASSWORD_DEFAULT));
echo("\n");
echo("MD5 function generated: ".md5($pass));
echo("\n");

?>
