<?php
require "db.php";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="This is social network html5 template available in themeforest......" />
		<meta name="keywords" content="Social Network, Social Media, Make Friends, Newsfeed, Profile Page" />
		<meta name="robots" content="index, follow" />
		<title>Music</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
		<link rel="stylesheet" href="css/style.css" />
		<link rel="stylesheet" href="css/ionicons.min.css" />
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <link href="css/emoji.css" rel="stylesheet">
    <!--Google Webfont-->
		<link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700' rel='stylesheet' type='text/css'>
    <!--Favicon-->
    <link rel="shortcut icon" type="image/png" href="images/fav.png"/>
	</head>
  <body>

    <!-- Header
    ================================================= -->
		<header id="header">
      <nav class="navbar navbar-default navbar-fixed-top menu">
        <div class="container">

          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="main.php"><img src="images/logo.png" alt="logo" /></a>
          </div>

          <!-- Collect the nav links, forms, and other content for toggling -->
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right main-menu">
              <li class="dropdown"><a href="main.php">Home</a></li>
              
            </ul>
            <form class="navbar-form navbar-right hidden-sm">
              <div class="form-group">
                <i class="icon ion-android-search"></i>
                <input type="text" class="form-control" placeholder="Search friends, photos, videos">
              </div>
            </form>
          </div><!-- /.navbar-collapse -->
        </div><!-- /.container -->
      </nav>
    </header>
    <!--Header End-->

    <div id="page-contents">
    	<div class="container">
    		<div class="row">

    			<!-- Newsfeed Common Side Bar Left
          ================================================= -->
    			<div class="col-md-3 static">
            <div class="profile-card">
              <img src="images/users/photo.jpg" alt="user" class="profile-photo" />
              <?php if(isset($_SESSION["logged_user"])) : ?>
              <h5><a class="text-white"><?php echo $_SESSION['logged_user']->first_name; ?> <?php echo $_SESSION['logged_user']->last_name; ?> </a></h5>

              <div><a style="color:white; float:right; font-family: 'Poppins', Arial, sans-serif; margin-right:15px; color:pink;" id="Exit" href="logout.php">Exit</a></div></div>
                <?php else : ?>
                <h5><a class="text-white">
                <span><a id="Login" href="login.php">Log in</a></span>
                <span><a id="Mezh">|</a></span>
                <span><a id="Sign" href="index.php">Sign up</a></span></a></h5>
                
            </div><!--profile card ends-->
            <?php endif; ?>
            <ul class="nav-news-feed">
              <li><i class="icon ion-ios-paper"></i><div><a href="main.php">News</a></div></li>
              <li><i class="icon ion-ios-people-outline"></i><div><a href="friends.php">Friends</a></div></li>
              <li><i class="icon ion-chatboxes"></i><div><a href="messages.php">Messages</a></div></li>
              <li><i class="icon ion-images"></i><div><a href="images.php">Images</a></div></li>
              <li><i class="fa fa-music"></i><div><a href="music.php">Music</a></div></li>
            </ul><!--news-feed links ends-->
          </div>
    			<div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            <div class="container">
                    <img src="images/music-background.jpg" style="width:700px; height:200px"/>
            </div><!-- Post Create Box End-->


            <!-- Media
            ================================================= -->
            <script>
            	document.addEventListener('play', function(e){
                var audios = document.getElementsByTagName('audio');
                for(var i = 0, len = audios.length; i < len;i++){
                if(audios[i] != e.target){
                   audios[i].pause();
        }
    }
}, true);
            </script>
            
            <table class="table table-hover" style="width:700px;">
            <thead>
            <tr>
            <th scope="col"></th>
            <th scope="col">Artist - song</th>
            </tr>
            </thead>
            <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Dennis Lloyd - GFY</td>
            <td><audio controls style="width: 350px; height: 30px; float:right;">
                <source src="music/Dennis Lloyd - GFY.mp3">
                </audio></td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Billie Eilish - bad guy</td>
            <td><audio controls style="width: 350px; height: 30px; float:right;">
                <source src="music/Billie Eilish - bad guy.mp3">
                </audio></td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td>Charlie Puth - Attention</td>
            <td><audio controls style="width: 350px; height: 30px; float:right;">
                <source src="music/Charlie Puth - Attention.mp3">
                </audio></td>
            </tr>
            <tr>
            <th scope="row">4</th>
            <td>Eminem feat. Juice WRLD - Godzilla</td>
            <td><audio controls style="width: 350px; height: 30px; float:right;">
                <source src="music/Eminem feat. Juice WRLD - Godzilla.mp3">
                </audio></td>
            </tr>
            <tr>
            <th scope="row">5</th>
            <td>grandson - Blood & Water</td>
            <td><audio controls style="width: 350px; height: 30px; float:right;">
                <source src="music/grandson - Blood & Water.mp3">
                </audio></td>
            </tr>
            <tr>
            <th scope="row">6</th>
            <td>Hippie Sabotage - Devil Eyes</td>
            <td><audio controls style="width: 350px; height: 30px; float:right;">
                <source src="music/Hippie Sabotage - Devil Eyes.mp3">
                </audio></td>
            </tr>
            <tr>
            <th scope="row">7</th>
            <td>Layto - Houndin</td>
            <td><audio controls style="width: 350px; height: 30px; float:right;">
                <source src="music/Layto - Houndin.mp3">
                </audio></td>
            </tr>
            <tr>
            <th scope="row">8</th>
            <td>Rag'n'Bone Man - Human</td>
            <td><audio controls style="width: 350px; height: 30px; float:right;">
                <source src="music/Rag'n'Bone Man - Human.mp3">
                </audio></td>
            </tr>
            <tr>
            <th scope="row">9</th>
            <td>Stromae - Formidable</td>
            <td><audio controls style="width: 350px; height: 30px; float:right;">
                <source src="music/Stromae - Formidable.mp3">
                </audio></td>
            </tr>
            <tr>
            <th scope="row">10</th>
            <td>Tones and I - Dance Monkey</td>
            <td><audio controls style="width: 350px; height: 30px; float:right;">
                <source src="music/Tones and I - Dance Monkey.mp3">
                </audio></td>
            </tr>
            </tbody>
            </table>

        

            





            
    <!-- Footer
    ================================================= -->
</div></div>
    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="footer-wrapper">
            <div class="col-md-3 col-sm-3">
              <a href="main.php"><img src="images/logo-black.png" alt="" class="footer-logo" /></a>
              <ul class="list-inline social-icons">
                <li><a><i class="icon ion-social-facebook"></i></a></li>
                <li><a><i class="icon ion-social-twitter"></i></a></li>
                <li><a><i class="icon ion-social-googleplus"></i></a></li>
                <li><a><i class="icon ion-social-pinterest"></i></a></li>
                <li><a><i class="icon ion-social-linkedin"></i></a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h6>For individuals</h6>
              <ul class="footer-links">
                <li><a href="">Signup</a></li>
                <li><a href="">login</a></li>
                <li><a href="">Explore</a></li>
                <li><a href="">Finder app</a></li>
                <li><a href="">Features</a></li>
                <li><a href="">Language settings</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h6>For businesses</h6>
              <ul class="footer-links">
                <li><a>Business signup</a></li>
                <li><a>Business login</a></li>
                <li><a>Benefits</a></li>
                <li><a>Resources</a></li>
                <li><a>Advertise</a></li>
                <li><a>Setup</a></li>
              </ul>
            </div>
            <div class="col-md-2 col-sm-2">
              <h6>About</h6>
              <ul class="footer-links">
                <li><a>About us</a></li>
                <li><a>Contact us</a></li>
                <li><a>Privacy Policy</a></li>
                <li><a>Terms</a></li>
                <li><a>Help</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-sm-3">
              <h6>Contact Us</h6>
                <ul class="contact">
                  <li><i class="icon ion-ios-telephone-outline"></i>+1 (234) 222 0754</li>
                  <li><i class="icon ion-ios-email-outline"></i>info@thunder-team.com</li>
                  <li><i class="icon ion-ios-location-outline"></i>228 Park Ave S NY, USA</li>
                </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="copyright">
        <p>All rights reserved</p>
      </div>
    </footer>
    
    <!--preloader-->
    <div id="spinner-wrapper">
      <div class="spinner"></div>
    </div>
    
    <!-- Scripts
    ================================================= -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCTMXfmDn0VlqWIyoOxK8997L-amWbUPiQ&callback=initMap"></script>
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.sticky-kit.min.js"></script>
    <script src="js/jquery.scrollbar.min.js"></script>
    <script src="js/script.js"></script>
  </body>
</html>