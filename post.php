<?php
	session_start();
	if(isset($_SESSION['UserId'])){
	    $text = $_POST['text'];
	     
	    $fp = fopen("log.html", 'a');
	    fwrite($fp, "<div class='msgln'>(".date("g:i A").") <b>".$_SESSION['UserId']."</b>: ".stripslashes(htmlspecialchars($text))."<br></div>");
	    fclose($fp);
	}
?>