<?php

 #
 # MiniApp
 #
 # info: main folder copyright file
 #
 #

session_start();

if (file_exists("config/config.php")){
	include("config/config.php");
}

if (file_exists("$MA_HEADER")){
	include("$MA_HEADER");
}
if (file_exists("$MA_JS_BEGIN")){
	include("$MA_JS_BEGIN");
}


$utime=time();
$loggedin=false;
$loginname='';


if (isset($_SESSION['loggedin'])) {
	$loggedin=true;
	if ($LOGIN_TIMEOUT>0){
		$logintime=$_SESSION['time'];
		if (($logintime+$LOGIN_TIMEOUT)<$utime){
			session_destroy();
			$loggedin=false;
		}
	}
	$_SESSION['time']=$utime;
}

if (isset($_POST["submitlogout"])){
	session_destroy();
	$loggedin=false;
}

if (isset($_POST["submitlogin"])){
	$pdb=count($MA_PASS);
	$uname=$_POST["username"];
	$pass=$_POST["password"];
	for($i=0;$i<$pdb;$i++){
		switch ($PASS_METHOD){
			case "md5":
				if (($uname==$MA_PASS[$i][0])and(md5($pass)==$MA_PASS[$i][1])){
					$loggedin=true;
				}
				break;
			case "plain":
				if (($uname==$MA_PASS[$i][0])and($pass==$MA_PASS[$i][1])){
					$loggedin=true;
				}
				break;
			case "hash":
				if (($uname==$MA_PASS[$i][0])and(password_verify($pass,$MA_PASS[$i][1]))){
					$loggedin=true;
				}
				break;
			default:
				if (($uname==$MA_PASS[$i][0])and($pass==$MA_PASS[$i][1])){
					$loggedin=true;
				}
		}
	}
	if ($loggedin){
		$loginname=$uname;
		session_regenerate_id();
		$_SESSION['loggedin']=true;
		$_SESSION['name']=$uname;
		$_SESSION['role']=$MA_PASS[$i][2];
		$_SESSION['time']=$utime;
		$i=$pdb;
	}
}





if ($loggedin){
	$GDPR=false;

	if (isset($_GET["p"])){
		$pos=$_GET["p"];
		if ($pos==$MA_SITE_HOME){
			echo("<script>window.location = \"$MA_SITE_HOME\";</script>");
		}else{
			if ($pos==$MA_LOGOUT_INDICATOR){
				session_destroy();
				echo("<script>window.location = \"$MA_SITE_HOME\";</script>");
			}else{
				if (file_exists("$pos")){
					include("$pos");
				}
			}
		}

	}else{

		if (file_exists("$MA_ADMINFILE_CONTENT")){
			include("$MA_ADMINFILE_CONTENT");
		}
	}


}else{
	# password
	$GDPR=true;
	echo("<h1>$L_SITENAME</h1>");
	echo("<div class=spaceline100></div>");
	echo("<form  method='post' enctype='multipart/form-data'>");
	echo("    $L_USER:");
	echo("    <input type='text' name='username' id='username' autofocus>");
	echo("<div class=spaceline></div>");
	echo("    $L_PASS:");
	echo("    <input type='password' name='password' id='password'>");
	echo("<div class=spaceline></div>");
	echo("    <input type='submit' value='$L_BUTTON_ALL' name='submitlogin' id='submitlogin'>");
	echo("</form>");
	echo("<div class=spaceline></div>");
}



if (file_exists("$MA_JS_END")){
	include("$MA_JS_END");
}
if (file_exists($MA_FOOTER)){
	include("$MA_FOOTER");
}

?>
