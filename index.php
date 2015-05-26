<html>
<head>
    <meta charset="utf-8"/>
    
    <title>Coolch.at</title>
	
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME ICONS STYLE SHEET -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLES -->
    <link href="assets/css/style.css" rel="stylesheet" />
	<script src="assets/js/jquery-1.11.1.js"></script>
    <!-- REQUIRED BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.js"></script>
   
    <!-- SCROLLING SCRIPTS PLUGIN  -->
    <script src="assets/js/jquery.easing.min.js"></script>
    <!-- CUSTOM SCRIPTS   -->
    <script src="assets/js/custom.js"></script>


<style>

</style>
</head>
<body>

    <div class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
				
                <a class="navbar-brand" href="#">
                    <img src="assets/img/logo.png" alt="CoolCh.at" class="img-responsive" style="margin-top:2px;"/>
                </a>
            </div>
            <div class="navbar-collapse collapse navbar-right scroll-me">
                <ul class="nav navbar-nav ">
                    <li><a href="#home">LOGIN</a></li>
					<li><a href="#signup">SIGN UP </a></li>
                    <li><a href="#about">CONTACT US </a></li>
                    <li><a href="#contact">ABOUT</a></li>
                </ul>
            </div>

        </div>
    </div>
    <!-- NAVBAR CODE END -->
   <?php
   include("login.php");
   ?>
    <!--HOME SECTION END  -->
	<?php
	include("signup.php");
	    ?>
    <!--  Sign UP Section END  -->
	 <?php
   include("contactus.php");
   ?>
   <!-- Contact US Section END  -->
    <?php
	include("about.php");
	?>
  
  
    
    <footer>
        © 2015 Coolch.at  | <a href="" target="_blank">by Technosoft Solutions</a>
    </footer>
    <!-- FOOTER SECTION END-->

</body>

</html>
