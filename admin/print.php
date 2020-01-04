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

$loggedin=false;

if (isset($_SESSION['loggedin'])) {
	$loggedin=true;
}



echo("<!DOCTYPE HTML>");
echo("<html><head>");
echo("<title>$MA_SITENAME</title>");
echo("<meta charset=\"utf-8\" />");
echo("<meta http-equiv=\"Content-Type\" content=\"text/html;charset=UTF-8\">");
echo("<meta name=\"viewport\" content=\"width=device-width, initial-scale=1\" />");
echo("<link rel=\"icon\" href=\"favicon.png\">");
echo("<link rel=\"shortcut icon\" type=\"image/png\" href=\"favicon.png\" />");
echo("</head>");
echo("<style>");
include("$MA_CSS2");
echo("</style>");
echo("<body>");

echo("<a onclick=\"window.history.back();\">");



if ($loggedin){
	echo($L_BUTTON_PRINT);
}else{
	echo("---");
}

echo("</a></body></html>");

?>
