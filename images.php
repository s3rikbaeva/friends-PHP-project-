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
		<title>Images | Cool Images</title>

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

            <!-- Media
            ================================================= -->
            <div class="media">
            	<div class="row js-masonry" data-masonry='{ "itemSelector": ".grid-item", "columnWidth": ".grid-sizer", "percentPosition": true }'>
                <div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-1">
                      <img src="images/post-images/6.jpg" alt="" class="img-responsive post-image" />
                    </div>
                    <div class="media-info">
                      <div class="reaction">
                        <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 63</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 12</a>
                      </div>
                      <div class="user-info">
                        <img src="images/users/user-8.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="" class="profile-link">Richard Bell</a></h6>
                          <a class="text-green" href="">Friend</a>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-1" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
                            <img src="images/post-images/1.jpg" alt="post-image" class="img-responsive post-image" />
                            <div class="post-container">
                              <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a class="profile-link">Alexis Clark</a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
                                  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                  <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-comment">
                                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                  <input type="text" class="form-control" placeholder="Post a comment">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->

                  </div>
            		</div>
                <div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-2">
                      <img src="images/post-images/3.jpg" alt="" class="img-responsive post-image" />
                    </div>
                    <div class="media-info">
                      <div class="reaction">
                        <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 100</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 99</a>
                      </div>
                      <div class="user-info">
                        <img src="images/users/user-5.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="" class="profile-link">Sarah Cruiz</a></h6>
                          <a class="text-green" href="">Friend</a>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-2" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
                            <img src="images/post-images/1.jpg" alt="post-image" class="img-responsive post-image" />
                            <div class="post-container">
                              <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a class="profile-link">Alexis Clark</a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
                                  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                  <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-comment">
                                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                  <input type="text" class="form-control" placeholder="Post a comment">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->

                  </div>
            		</div>
            		<div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-3">
                      <img src="images/post-images/5.jpg" alt="" class="img-responsive post-image" />
                    </div>
                    <div class="media-info">
                      <div class="reaction">
                        <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 233</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 30</a>
                      </div>
                      <div class="user-info">
                        <img src="images/users/user-7.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="" class="profile-link">Robert Cook</a></h6>
                          <a class="text-green" href="">Friend</a>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-3" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
                            <img src="images/post-images/1.jpg" alt="post-image" class="img-responsive post-image" />
                            <div class="post-container">
                              <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a class="profile-link">Alexis Clark</a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
                                  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                  <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-comment">
                                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                  <input type="text" class="form-control" placeholder="Post a comment">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->

                  </div>
            		</div>
                <div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-4">
                      <img src="images/post-images/2.jpg" alt="" class="img-responsive post-image" />
                    </div>
                    <div class="media-info">
                      <div class="reaction">
                        <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 73</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 4</a>
                      </div>
                      <div class="user-info">
                        <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="#" class="profile-link">John Doe</a></h6>
                          <a class="text-green" href="">Friend</a>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-4" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
                            <img src="images/post-images/1.jpg" alt="post-image" class="img-responsive post-image" />
                            <div class="post-container">
                              <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a class="profile-link">Alexis Clark</a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
                                  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                  <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-comment">
                                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                  <input type="text" class="form-control" placeholder="Post a comment">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->

                  </div>
            		</div>
                <div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-5">
                      <img src="images/post-images/4.jpg" alt="" class="img-responsive post-image" />
                    </div>
                    <div class="media-info">
                      <div class="reaction">
                        <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 34</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 2</a>
                      </div>
                      <div class="user-info">
                        <img src="images/users/user-3.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="" class="profile-link">Sophia Lee</a></h6>
                          <a class="text-green" href="">Friend</a>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-5" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
                            <img src="images/post-images/1.jpg" alt="post-image" class="img-responsive post-image" />
                            <div class="post-container">
                              <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a class="profile-link">Alexis Clark</a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
                                  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                  <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-comment">
                                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                  <input type="text" class="form-control" placeholder="Post a comment">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->

                  </div>
            		</div>
            		<div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-6">
                      <img src="images/post-images/7.jpg" alt="" class="img-responsive post-image" />
                    </div>
                    <div class="media-info">
                      <div class="reaction">
                        <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 71</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                      </div>
                      <div class="user-info">
                        <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="" class="profile-link">John Doe</a></h6>
                          <a class="text-green" href="">Friend</a>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-6" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
                            <img src="images/post-images/1.jpg" alt="post-image" class="img-responsive post-image" />
                            <div class="post-container">
                              <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a class="profile-link">Alexis Clark</a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
                                  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                  <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-comment">
                                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                  <input type="text" class="form-control" placeholder="Post a comment">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->

                  </div>
            		</div>
                <div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-7">
                      <img src="images/post-images/1.jpg" alt="" class="img-responsive post-image" />
                    </div>
                    <div class="media-info">
                      <div class="reaction">
                        <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 55</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 2</a>
                      </div>
                      <div class="user-info">
                        <img src="images/users/user-5.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="" class="profile-link">Alexis Clark</a></h6>
                          <a class="text-green" href="">Friend</a>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-7" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
                            <img src="images/post-images/1.jpg" alt="post-image" class="img-responsive post-image" />
                            <div class="post-container">
                              <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a class="profile-link">Alexis Clark</a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
                                  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                  <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-comment">
                                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                  <input type="text" class="form-control" placeholder="Post a comment">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->

                  </div>
            		</div>
                <div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-8">
                      <img src="images/post-images/9.jpg" alt="" class="img-responsive post-image" />
                    </div>
                    <div class="media-info">
                      <div class="reaction">
                        <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 81</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 1</a>
                      </div>
                      <div class="user-info">
                        <img src="images/users/user-2.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="" class="profile-link">Linda Lohan</a></h6>
                          <a class="text-green" href="">Friend</a>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-8" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
                            <img src="images/post-images/1.jpg" alt="post-image" class="img-responsive post-image" />
                            <div class="post-container">
                              <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a class="profile-link">Alexis Clark</a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
                                  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                  <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-comment">
                                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                  <input type="text" class="form-control" placeholder="Post a comment">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->

                  </div>
            		</div>
                <div class="grid-item col-md-6 col-sm-6">
            			<div class="media-grid">
                    <div class="img-wrapper" data-toggle="modal" data-target=".modal-9">
                      <img src="images/post-images/8.jpg" alt="" class="img-responsive post-image" />
                    </div>
                    <div class="media-info">
                      <div class="reaction">
                        <a class="btn text-green"><i class="fa fa-thumbs-up"></i> 47</a>
                        <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 9</a>
                      </div>
                      <div class="user-info">
                        <img src="images/users/user-5.jpg" alt="" class="profile-photo-sm pull-left" />
                        <div class="user">
                          <h6><a href="" class="profile-link">Julia Cox</a></h6>
                          <a class="text-green" href="">Friend</a>
                        </div>
                      </div>
                    </div>

                    <!--Popup-->
                    <div class="modal fade modal-9" tabindex="-1" role="dialog" aria-hidden="true">
                      <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                          <div class="post-content">
                            <img src="images/post-images/1.jpg" alt="post-image" class="img-responsive post-image" />
                            <div class="post-container">
                              <img src="images/users/user-5.jpg" alt="user" class="profile-photo-md pull-left" />
                              <div class="post-detail">
                                <div class="user-info">
                                  <h5><a class="profile-link">Alexis Clark</a> <span class="following">following</span></h5>
                                  <p class="text-muted">Published a photo about 3 mins ago</p>
                                </div>
                                <div class="reaction">
                                  <a class="btn text-green"><i class="icon ion-thumbsup"></i> 13</a>
                                  <a class="btn text-red"><i class="fa fa-thumbs-down"></i> 0</a>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-text">
                                  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <i class="em em-anguished"></i> <i class="em em-anguished"></i> <i class="em em-anguished"></i></p>
                                </div>
                                <div class="line-divider"></div>
                                <div class="post-comment">
                                  <img src="images/users/user-11.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">Diana </a><i class="em em-laughing"></i> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-4.jpg" alt="" class="profile-photo-sm" />
                                  <p><a class="profile-link">John</a> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                </div>
                                <div class="post-comment">
                                  <img src="images/users/user-1.jpg" alt="" class="profile-photo-sm" />
                                  <input type="text" class="form-control" placeholder="Post a comment">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div><!--Popup End-->
                  </div>
            		</div>
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