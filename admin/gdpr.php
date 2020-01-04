<?php

 #
 # MiniApp
 #
 # info: main folder copyright file
 #
 #

if (file_exists("config/config.php")){
	include("config/config.php");
}

if (file_exists("$MA_HEADER")){
	include("$MA_HEADER");
}
if (file_exists("$MA_JS_BEGIN")){
	include("$MA_JS_BEGIN");
}


echo("<div class=spaceline></div>");

if (file_exists("$MA_GDPR_TEXT")){
	include("$MA_GDPR_TEXT");
}

echo("<div class=spaceline></div>");


if (file_exists("$MA_JS_END")){
	include("$MA_JS_END");
}
if (file_exists($MA_FOOTER)){
	include("$MA_FOOTER");
}

?>
