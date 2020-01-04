<!DOCTYPE HTML>
<html>
	<head>
		<title><?php echo($MA_SITE_TITLE); ?></title>
		<meta charset="utf-8" />
		<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="icon" href="favicon.png">
		<link rel="shortcut icon" type="image/png" href="favicon.png" />
	</head>
	<style><?php include("$MA_CSS"); ?></style>
<body>


<div class=all-page>

<header>

<div class="menu">
	<ul class="sidenav">
		<?php
			$mdb=count($MA_MENU);
			for($i=0;$i<$mdb;$i++){
				if (!empty($MA_MENU[$i][1])){
					echo("<li><a href=\"?".$MA_POS."=".$MA_MENU[$i][1]."\">".$MA_MENU[$i][0]."</a></li>");
				}else{
					echo("<li><a href=\"?\">".$MA_MENU[$i][0]."</a></li>");
				}
			}
		?>
		<li style="float:right;padding:0px;">
			<a href="<?php echo("?".$MA_POS."=".$MA_SEARCH);?>">
				<div style="transform:rotate(90deg);">&#9740;</div>
			</a>
		</li>
	</ul>
</div>

</header>


<div class="content" id="content">
