
</div>

<?php
	if ($GDPR){
		echo("<label class='line'>".$MA_GDPR_MESS."</label>");
	}
?>


<footer>

	<ul class="sidenav">
		<li><?php echo($COPYRIGHT); ?></li>
		<?php
			if ($GDPR){
				echo("<li><a href=$MA_GDPR_FILE>$MA_GDPR_LINK_NAME</a></li>");
			}
			$mdb=count($MA_FOOTER_MENU);
			for($i=0;$i<$mdb;$i++){
				if (!empty($MA_FOOTER_MENU[$i][1])){
					echo("<li><a href=\"?".$MA_POS."=".$MA_FOOTER_MENU[$i][1]."\">".$MA_FOOTER_MENU[$i][0]."</a></li>");
				}else{
					echo("<li><a href=\"?\">".$MA_FOOTER_MENU[$i][0]."</a></li>");
				}
			}
		?>
	</ul>

</footer>

</body>
</html>
