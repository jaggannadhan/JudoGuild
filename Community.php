<?php
		session_start();
		include "testlogin.php";
		if(!isset($_SESSION['UserId'])){
		    header("Location: Sign-in.html?error=Not%20Logged%20In!");
		}
		else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Community-Judo Guild</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <style type="text/css">
/*///////BODY STYLES//////*/
	body{

	}

/*///////NAV BAR STYLES//////*/
      .navbar-custom{
        background-color: black;
        height: 60px;
      }
      .nav-link{
        font-size: 1.3em;
        color: white;
        padding: 0px 20px;
      }
      .nav-item{
        padding: 10px 10px;
      }
      .push{
        width: 34px;
        height: 34px;
      }
      .push:active{
        width: 32px;
        height: 32px;
      }
      .nav-link:hover{
        color: white;
        font-weight: bold;
        text-shadow: 0 0 10px 10px;
      }
/*///////NAV BAR STYLES//////*/	

		.center{
			margin: 0px 10px;
			border-right:2px solid yellow;
			border-left:2px solid white;
		}
		.right{
			margin-right: 10px;
			border-left: 2px solid white;
		}
		.container-fluid{
			position: absolute;
			top: 70px;
			left: 20px;			
		}
		.sidebar{
			border: 2px solid white;
		}

		.blog-sidebar{
			position: absolute;
			right: 20px;
			background: white;
			padding:25px;
			border-radius: 30px;
		}
/*///////CHAT STYLES//////*/	
		
		.sidenav {
		    height: 100%;
		    width: 0;
		    position: fixed;
		    z-index: 1;
		    top: 0;
		    right: 0;
		    background-color: #111;
		    overflow-x: hidden;
		    transition: 1s;
		    padding-top: 120px;
		}

		.sidenav a {
		    padding: 8px 8px 8px 32px;
		    text-decoration: none;
		    font-size: 25px;
		    color: #818181;
		    display: block;
		    transition: 0.3s;
		}

		.sidenav a:hover {
		    color: #f1f1f1;
		}

		.sidenav .closebtn {
		    position: absolute;
		    top: 50px;
		    right: 25px;
		    font-size: 36px;
		    margin-left: 50px;
		}
/*///////POST PANE//////*/
		.Post{
			position: fixed;
			bottom: 10px;
			left: 400px;	
		}
		.attachment a{
			padding-left: 5px;
			color: white;
		}

		#wrapper{
		    margin:0 auto;
		    padding:5px;		    
		    width:100%;
		}	
		  
		#chatbox {
		    text-align:left;
		    margin:0 auto;
		    margin-bottom:25px;
		    padding:10px;
		    height:470px;
		    width:100%;
		    overflow:auto; }
	</style>

</head>
<body>

	<!-- NAVIGATION BAR-->	
	<header>
      <nav class="navbar navbar-expand-md fixed-top navbar-custom">
        <a class="navbar-brand" href="Home.html"><img src="images/siteLogo.png" width ="160" height="60" style="margin-left: 50px; width: 120px; height: 50px;"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="Home.html" style="">Home<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="Contact.html">Contact</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="About-JudoCommunity.html">About</a>
            </li>            
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">                
                <a href=""><img class="img-responsive push" src="images/settings.png" data-toggle= "tooltip" title="Settings" data-placement= "bottom"></a> 
            </li>
            <li class="nav-item">
              <a href="logout.php"><img class="img-responsive push" src="images/signout.png" data-toggle= "tooltip" title="Sign Out" data-placement= "bottom"></a> 
            </li>
          </ul>    
        </div>
        </nav>
    </header>
<!-- NAVIGATION BAR ENDS-->

	<div>
		<img src="images/wall.jpeg" width="100%" height="100%">
	</div>

<!--LEFT SIDE PANE-->
	<div class="container-fluid">
      	<div class="row">
	        <nav class="col-md-2 hidden-xs-down bg-faded sidebar left">
	          <ul class="nav nav-pills flex-column">
	            <li class="nav-item">
	              <a class="nav-link active" href="#">Quick Links<span class="sr-only">(current)</span></a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">Reports</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">Analytics</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">Export</a>
	            </li>
	          </ul>

	          <ul class="nav nav-pills flex-column">
	            <li class="nav-item">
	              <a class="nav-link" href="#">Nav item 1</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">Nav item 2</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">Nav item 3</a>
	            </li>
	            <li class="nav-item">
	              <a class="nav-link" href="#">Nav item 4</a>
	            </li>
	          </ul>	          
	        </nav>
	    
	
<!--LEFT SIDE PANE ENDS-->

<!--CENTER CONTENT-->

	<div class="col-md-7 center" >

		<div id="wrapper">

			<div id="chatbox"><?php
				if(file_exists('log.html') && filesize('log.html') > 0){
				    $handle = fopen('log.html', 'r');
				    $contents = fread($handle, filesize('log.html'));
				    fclose($handle);
				     
				    echo $contents;
				}?>
			</div>

			<!-- POST PANE-->
			<form id="formsubmit" name="message" style="display: inline-flex;">
		        <div>
					<label for="usermsg" class="sr-only">Type Here...</label>
			    	<input name="usermsg" type="text" id="usermsg" class="form-control" placeholder="Type Here..." style="width: 570px;">
			    </div>
			    <div class="well">
			        <div class="attachment" style=" padding: 7px 5px;">    	
				    	<a href="#" data-toggle= "tooltip" title="Files" data-placement= "bottom">
			          		<i class="fa fa-paperclip" aria-hidden="true"></i>
			        	</a>
				    	
				    	<a href="#" data-toggle= "tooltip" title="Pictures" data-placement= "bottom">
			          		<i class="fa fa-camera-retro"></i>
			        	</a>

			        	<a href="#" data-toggle= "tooltip" title="Music" data-placement= "bottom">
			          		<i class="fa fa-music" aria-hidden="true"></i>
			        	</a>   

			        	<a href="#" data-toggle= "tooltip" title="Geo-Location" data-placement= "bottom">
			          		<i class="fa fa-map-marker" aria-hidden="true"></i>
			        	</a>      	
				    </div>
				</div>
		        <button class="btn-sm btn-primary" type="submit"  id="submitmsg" value="Send" style="height: 38px;">Send</button>
		    </form>
			<!-- POST PANE ENDS-->
		</div>

	</div>

<!--CENTER CONTENT ENDS-->

<!--RIGHT SIDE PANE-->
	
			<div class="col-md-2 blog-sidebar right">
			    <div class="sidebar-module sidebar-module-inset">
			        <div id="mySidenav" class="sidenav">
					  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
					  <a href="#">Person 1</a>
					  <a href="#">Person 2</a>
					  <a href="#">Person 3</a>
					  <a href="#">Person 4</a>
					</div>

					<div id="main">				  
					  <span style="font-size:23px;cursor:pointer" onclick="openNav()"> &#9776; Who's Online</span>
					</div><hr>
			    </div>
			    <div class="sidebar-module">
			        <h4>Archives</h4>
			        <ol class="list-unstyled">
			          <li><a href="#">March 2018</a></li>
			          <li><a href="#">February 2018</a></li>
			          <li><a href="#">January 2018</a></li>
			          <li><a href="#">December 2017</a></li>
			          <li><a href="#">November 2017</a></li>
			          <li><a href="#">October 2017</a></li>
			        </ol>
			      </div>
			      <div class="sidebar-module">
			        <h4>Elsewhere</h4>
			        <ol class="list-unstyled">
			          <li><a href="#">GitHub</a></li>
			          <li><a href="#">Twitter</a></li>
			          <li><a href="#">Facebook</a></li>
			        </ol>
			      </div>
		    </div><!-- /.blog-sidebar -->
		</div>
	</div>

<!--RIGHT SIDE PANE ENDS-->



	<script  src="https://code.jquery.com/jquery-1.12.4.min.js"  integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="  crossorigin="anonymous"></script>
	<script type="text/javascript" src="bootstrap.js"></script>
	<script defer src="https://use.fontawesome.com/releases/v5.0.2/js/all.js"></script>

	<script type="text/javascript">
		function openNav() {
		    document.getElementById("mySidenav").style.width = "250px";
		    document.getElementById("main").style.marginRight = "250px";
		    document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
		}

		function closeNav() {
		    document.getElementById("mySidenav").style.width = "0";
		    document.getElementById("main").style.marginRight= "0";
		    document.body.style.backgroundColor = "white";
		}

		// jQuery Document
		$(document).ready(function(){

			//If user wants to end session
			$("#exit").click(function(){
				var exit = confirm("Are you sure you want to end the session?");		
				if(exit==true){window.location = 'test.php?logout=true';}		
			});

			//If user submits the form
			$("#submitmsg").click(function(){	
				var clientmsg = $("#usermsg").val();
				$.post("post.php", {text: clientmsg});				
				$("#usermsg").attr("value") = "";
				setInterval (loadLog, 1500);						
				return false;
			});
		 
		});			

		function loadLog(){
			var oldscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height before the request
			$.ajax({
				url: "log.html",
				cache: false,
				success: function(html){		
					$("#chatbox").html(html); //Insert chat log into the #chatbox div	
					
					//Auto-scroll			
					var newscrollHeight = $("#chatbox").attr("scrollHeight") - 20; //Scroll height after the request
					if(newscrollHeight > oldscrollHeight){
						$("#chatbox").animate({ scrollTop: newscrollHeight }, 'normal'); //Autoscroll to bottom of div
					}				
			  	},
			});
		}		
		
	</script>
</body>
</html>
<?php
}
?>