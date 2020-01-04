<?php

 #
 # MiniApp
 #
 # info: main folder copyright file
 #
 #



function vinput($d) {
    $d=trim($d);
    $d=stripslashes($d);
    $d=strip_tags($d);
    $d=htmlspecialchars($d);
    return $d;
}


function vinputtags($d) {
    $d=trim($d);
    $d=stripslashes($d);
    $d=htmlspecialchars($d);
    return $d;
}


function mess_error($m){
    echo("<div class='message' style='mmargin:20px;'>
	    <div onclick='this.parentElement.style.display=\"none\"' class='toprightclose'></div>
	    <p style='padding-left:40px;'>$m</p>
	</div>");
}


function mess_ok($m){
    echo("<div class='card'>
	    <div onclick='this.parentElement.style.display=\"none\"' class='toprightclose'></div>
	    <div class=card-header><br /></div>
	    <div class='cardbody' id='cardbody'>
		<p style='padding-left:40px;padding-bottom:20px;'>$m</p>
	    </div>
	</div>");
}


if ($loggedin){
	echo("<div class=spaceline></div>");

	echo("Miniapp admin content.");
	echo("<div class=spaceline></div>");
	echo("User: $loginname");
	echo("<div class=spaceline></div>");

	echo("<div class=spaceline></div>");



	echo("<form  method='post' enctype='multipart/form-data' id=1000>");
	echo("    <input type='hidden' value='$L_BUTTON_LOGOUT'>");
	echo("    <input type='submit' value='$L_BUTTON_LOGOUT' name='submitlogout' id='submitlogout'>");
	echo("</form>");
	echo("<div class=spaceline></div>");

}

?>
