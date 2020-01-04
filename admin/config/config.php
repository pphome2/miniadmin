<?php

 #
 # MiniApp
 #
 # info: main folder copyright file
 #
 #

# configuration - need change it

# language
$MA_LANGFILE="hu.php";

if (file_exists("config/$MA_LANGFILE")){
	include("config/$MA_LANGFILE");
}

# default
$COPYRIGHT="© 2020. <a href=https://github.com/pphome2/miniapp-admin>MiniApp Admin</a>";

# array: username, password, role
# password now: password
$MA_PASS=array(
				array('admin','$2y$10$GiBheUDKE210bgh.4gkLzuJC3c7aJtKIMxVVq.kDrCt7KT8ePY6KK','a'),
				array('root','$2y$10$GiBheUDKE210bgh.4gkLzuJC3c7aJtKIMxVVq.kDrCt7KT8ePY6KK','b')
			);

# pass_method: md5 or plain or hash
#      md5: php md5() function
#      plain: plain text, not crypted
#      hash: php password_hash function (password_coder.php in config dir)
$PASS_METHOD="hash";

# auto logout - second
$LOGIN_TIMEOUT=600;


# page title and main page in site
$MA_SITE_TITLE="MiniApp - Demo";
$MA_SITE_HOME="../index.html";

# logout initialized
$MA_LOGOUT_INDICATOR="logout";

# menu system
$MA_MENU=array(
				array($L_EXIT,$MA_SITE_HOME),
				array($L_SITEHOME,""),
				array("1","1.php"),
				array("2","2.php"),
				array("3","3.php"),
				array($L_BUTTON_LOGOUT,$MA_LOGOUT_INDICATOR)
			);

$MA_FOOTER_MENU=array(
					array("1","1.php"),
					array("2","2.php"),
					array("3","3.php")
				);

# files, folders config
$MA_CSS="site.css";
$MA_CSS2="site2.css";
$MA_JS_BEGIN="";
$MA_JS_END="js_end.js";
$MA_HEADER="header.php";
$MA_FOOTER="footer.php";
$MA_SEARCH="search.php";
$MA_GDPR_MESS=$L_GDPR_MESS;
$MA_GDPR_LINK_NAME=$L_GDPR_LINK_NAME;
$MA_GDPR_FILE="gdpr.php";
$MA_GDPR_TEXT="config/gdpr.php";

# system php files
$MA_ADMINFILE="miniadmin.php";
$MA_ADMINFILE_CONTENT="madmin.php";
$MA_PRINTFILE="print.php";

# param
$MA_POS="p";

?>
