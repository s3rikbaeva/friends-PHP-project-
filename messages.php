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
		<title>Chatroom | Send and Receive Messages</title>

    <!-- Stylesheets
    ================================================= -->
		<link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/jquery.scrollbar.css" />
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
            <div id="chat-block">
              <div class="title">Chat online</div>
              <ul class="online-users list-inline">
                <li><a href="messages.php" title="Linda Lohan"><img src="images/users/user-2.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="messages.php" title="Sophia Lee"><img src="images/users/user-3.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="messages.php" title="John Doe"><img src="images/users/user-4.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="messages.php" title="Alexis Clark"><img src="images/users/user-5.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="messages.php" title="James Carter"><img src="images/users/user-6.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="messages.php" title="Robert Cook"><img src="images/users/user-7.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="messages.php" title="Richard Bell"><img src="images/users/user-8.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="messages.php" title="Anna Young"><img src="images/users/user-9.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
                <li><a href="messages.php" title="Julia Cox"><img src="images/users/user-10.jpg" alt="user" class="img-responsive profile-photo" /><span class="online-dot"></span></a></li>
              </ul>
            </div><!--chat block ends-->
          </div>
          <div class="col-md-7">

            <!-- Post Create Box
            ================================================= -->
            <div class="create-post">
              <div class="row">
                <div class="col-md-7 col-sm-7">
                  <div class="form-group">
                    <img src="images/users/photo.jpg" alt="" class="profile-photo-md" />
                    <textarea name="texts" id="exampleTextarea" cols="30" rows="1" class="form-control" placeholder="Write what you wish"></textarea>
                  </div>
                </div>
                <div class="col-md-5 col-sm-5">
                  <div class="tools">
                    <ul class="publishing-tools list-inline">
                      <li><a><i class="ion-compose"></i></a></li>
                      <li><a><i class="ion-images"></i></a></li>
                      <li><a><i class="ion-ios-videocam"></i></a></li>
                      <li><a><i class="ion-map"></i></a></li>
                    </ul>
                    <button class="btn btn-primary pull-right">Publish</button>
                  </div>
                </div>
              </div>
            </div><!-- Post Create Box End-->

            <!-- Chat Room
            ================================================= -->
            <div class="chat-room">
              <div  class="row">
                <div class="col-md-5">

                  <!-- Contact List in Left-->
                  <ul class="nav nav-tabs contact-list scrollbar-wrapper scrollbar-outer">
                    <li class="active">
                      <a href="#contact-1" data-toggle="tab">
                        <div class="contact">
                        	<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left"/>
                        	<div class="msg-preview">
                        		<h6>Linda Lohan</h6>
                        		<p class="text-muted">Hi there, how are you</p>
                            <small class="text-muted">a min ago</small>
                            <div class="chat-alert">1</div>
                        	</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-2" data-toggle="tab">
                        <div class="contact">
                          <img src="images/users/user-10.jpg" alt="" class="profile-photo-sm pull-left"/>
                          <div class="msg-preview">
                            <h6>Julia Cox</h6>
                            <p class="text-muted">see you soon</p>
                            <small class="text-muted">an hour ago</small>
                            <div class="seen"><i class="icon ion-checkmark-round"></i></div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-3" data-toggle="tab">
                        <div class="contact">
                          <img src="images/users/user-3.jpg" alt="" class="profile-photo-sm pull-left"/>
                          <div class="msg-preview">
                            <h6>Sophia Lee</h6>
                            <p class="text-muted">Okay fine. thank you</p>
                            <small class="text-muted">13 hour ago</small>
                            <div class="replied"><i class="icon ion-reply"></i></div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-4" data-toggle="tab">
                        <div class="contact">
                        	<img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left"/>
                        	<div class="msg-preview">
                        		<h6>John Doe</h6>
                        		<p class="text-muted">hey anybody there</p>
                            <small class="text-muted">Yesterday</small>
                            <div class="chat-alert">1</div>
                        	</div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-5" data-toggle="tab">
                        <div class="contact">
                          <img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left"/>
                          <div class="msg-preview">
                            <h6>Anna Young</h6>
                            <p class="text-muted">I gotta go</p>
                            <small class="text-muted">2 days ago</small>
                            <div class="seen"><i class="icon ion-checkmark-round"></i></div>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <a href="#contact-6" data-toggle="tab">
                        <div class="contact">
                        	<img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left"/>
                        	<div class="msg-preview">
                        		<h6>Richard Bell</h6>
                        		<p class="text-muted">Hey there?</p>
                            <small class="text-muted">2 days ago</small>
                            <div class="chat-alert">1</div>
                        	</div>
                        </div>
                      </a>
                    </li>
                  </ul><!--Contact List in Left End-->

                </div>
                <div class="col-md-7">

                  <!--Chat Messages in Right-->
                  <div class="tab-content scrollbar-wrapper wrapper scrollbar-outer">
                    <div class="tab-pane active" id="contact-1">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="left">
                      			<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Linda Lohan</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p>Hi honey, how are you doing???? Long time no see. Where have you been?</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p>I have been on vacation</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p>it was a great time for me. we had a lot of fun <i class="em em-blush"></i></p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Linda Lohan</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p>that's cool I wish I were you <i class="em em-expressionless"></i></p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted">3 days ago</small>
                              </div>
                              <p><i class="em em-hand"></i></p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Linda Lohan</h5>
                              	<small class="text-muted">a min ago</small>
                              </div>
                              <p>Hi there, how are you</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                    <div class="tab-pane" id="contact-2">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="left">
                      			<img src="images/users/user-10.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Julia Cox</h5>
                              	<small class="text-muted">a day ago</small>
                              </div>
                              <p>Hi</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted">a day ago</small>
                              </div>
                              <p>hellow</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-10.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Julia Cox</h5>
                              	<small class="text-muted">an hour ago</small>
                              </div>
                              <p>good</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted">an hour ago</small>
                              </div>
                              <p>see you soon</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                    <div class="tab-pane" id="contact-3">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-3.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sophia Lee</h5>
                              	<small class="text-muted">a day ago</small>
                              </div>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah  Cruiz</h5>
                              	<small class="text-muted">13 hours ago</small>
                              </div>
                              <p>Okay fine. thank you</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                    <div class="tab-pane" id="contact-4">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="left">
                      			<img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>John Doe</h5>
                              	<small class="text-muted">a day ago</small>
                              </div>
                              <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>John Doe</h5>
                              	<small class="text-muted">a day ago</small>
                              </div>
                              <p>hey anybody there</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                    <div class="tab-pane" id="contact-5">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="left">
                      			<img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Anna Young</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-9.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Anna Young</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                            </div>
                      		</li>
                          <li class="right">
                      			<img src="images/users/user-1.jpg" alt="" class="profile-photo-sm pull-right" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Sarah Cruiz</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>I gotta go</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                    <div class="tab-pane" id="contact-6">
                      <div class="chat-body">
                      	<ul class="chat-message">
                      		<li class="left">
                      			<img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Richard Bell</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Hello</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Richard Bell</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Hi</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Richard Bell</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Hey</p>
                            </div>
                      		</li>
                          <li class="left">
                      			<img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                      			<div class="chat-item">
                              <div class="chat-item-header">
                              	<h5>Richard Bell</h5>
                              	<small class="text-muted">2 days ago</small>
                              </div>
                              <p>Hey there</p>
                            </div>
                      		</li>
                      	</ul>
                      </div>
                    </div>
                  </div><!--Chat Messages in Right End-->

                  <div class="send-message">
                    <div class="input-group">
                      <input type="text" class="form-control" placeholder="Type your message">
                      <span class="input-group-btn">
                        <button class="btn btn-default" type="button">Send</button>
                      </span>
                    </div>
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>

    			<!-- Newsfeed Common Side Bar Right
          ================================================= -->
    			<div class="col-md-2 static">
            <div class="suggestions" id="sticky-sidebar">
              <h4 class="grey">Who to Follow</h4>
              <div class="follow-user">
                <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a>Diana Amber</a></h5>
                  <a class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="images/users/user-12.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a>Cris Haris</a></h5>
                  <a class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="images/users/user-13.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a>Brian Walton</a></h5>
                  <a class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="images/users/user-14.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a>Olivia Steward</a></h5>
                  <a class="text-green">Add friend</a>
                </div>
              </div>
              <div class="follow-user">
                <img src="images/users/user-15.jpg" alt="" class="profile-photo-sm pull-left" />
                <div>
                  <h5><a>Sophia Page</a></h5>
                  <a class="text-green">Add friend</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer
    ================================================= -->
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