<?php
session_start();
$author=$_SESSION['username'];
$db=mysqli_connect('localhost','root','','project');

if(isset($_POST['post'])){
       
            $title = strip_tags($_POST['title']);
            $content = strip_tags($_POST['content']);

            $title= mysqli_real_escape_string($db,$title);
            $content= mysqli_real_escape_string($db,$content);
            $file_name=$_FILES['image']['name'];
            $file_size=$_FILES['image']['size'];
            $file_tmp=$_FILES['image']['tmp_name'];
            $file_type=$_FILES['image']['type'];
            $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
            $file_store=$file_name;
            $file_store="image/".$file_name;
            move_uploaded_file($file_tmp, $file_store);

            $date=date('l jS \of F Y h:i:s A');
            $sql="INSERT into posts (title, content, date, author,image) VALUES('$title','$content','$date','$author','$file_store')";
            if($title==""||$content==""){
                echo "Please complete your POST!";
                return;
            }

            mysqli_query($db,$sql);
            

            header("location:afterlogin.php");
            
        }
?>
<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- Site Metas -->
    <title>Svvv-O-pedia</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">
    
    <!-- Design fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,400,400i,500,700" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet"> 

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- FontAwesome Icons core CSS -->
    <link href="css/font-awesome.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive styles for this template -->
    <link href="css/responsive.css" rel="stylesheet">

    <!-- Colors for this template -->
    <link href="css/colors.css" rel="stylesheet">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>

    <!-- LOADER -->
    <div id="preloader">
        <img class="preloader" src="images/loader.gif" alt="">
    </div><!-- end loader -->
    <!-- END LOADER -->

    <div id="wrapper">
        <div class="collapse top-search" id="collapseExample">
            <div class="card card-block">
                <div class="newsletter-widget text-center">
                   
                </div><!-- end newsletter -->
            </div>
        </div><!-- end top-search -->

        <div class="topbar-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6 hidden-xs-down">
                        <div class="topsocial">
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Youtube"><i class="fa fa-youtube"></i></a>
                           
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                            
                            <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                           
                        </div><!-- end social -->
                    </div><!-- end col -->

                   
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end topbar -->

        <div class="header-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="logo">
                            <a href="afterlogin.php"><img src="images/logo.png" alt=""></a>
                        </div><!-- end logo -->
                    </div>
                </div><!-- end row -->
            </div><!-- end header-logo -->
        </div><!-- end header -->

        <header class="header">
            <div class="container">
                <nav class="navbar navbar-inverse navbar-toggleable-md">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#cloapediamenu" aria-controls="cloapediamenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-md-center" id="cloapediamenu">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link color-pink-hover" href="afterlogin.php">Home</a>
                            </li>
                            <li class="nav-item dropdown has-submenu menu-large hidden-md-down hidden-sm-down hidden-xs-down">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown01" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Games</a>
                                <ul class="dropdown-menu megamenu" aria-labelledby="dropdown01">
                                    <li>
                                        <div class="mega-menu-content clearfix">
                                           

                                            <div class="tab-details clearfix">
                                                <div id="cat01" class="tabcontent active">
                                                    <div class="row">
                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="pacman/pacman.html" title="">
                                                                        <img src="upload/pacman1.png" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Game 1</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="pacman/pacman.html" title="">PACMAN</a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="snake.html" title="">
                                                                        <img src="upload/snake.png" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Game 2</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="snake.html" title="">SNAKE</a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="2048/game2048.html" title="">
                                                                        <img src="upload/2048.png" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Game 3</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="2048/game2048.html" title="">2048</a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>

                                                        <div class="col-lg-3 col-md-6 col-sm-12 col-xs-12">
                                                            <div class="blog-box">
                                                                <div class="post-media">
                                                                    <a href="racing/index.html" title="">
                                                                        <img src="upload/carracing.png" alt="" class="img-fluid">
                                                                        <div class="hovereffect">
                                                                        </div><!-- end hover -->
                                                                        <span class="menucat">Game 4</span>
                                                                    </a>
                                                                </div><!-- end media -->
                                                                <div class="blog-meta">
                                                                    <h4><a href="racing/index.html" title="">CAR RACING</a></h4>
                                                                </div><!-- end meta -->
                                                            </div><!-- end blog-box -->
                                                        </div>
                                                    </div><!-- end row -->
                                                </div>
                                            </div><!-- end tab-details -->
                                        </div><!-- end mega-menu-content -->
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown has-submenu">
                                <a class="nav-link dropdown-toggle" href="#" id="dropdown02" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Blogs</a>
                                <ul class="dropdown-menu" aria-labelledby="dropdown02">
                                    <li><a class="dropdown-item" href="single-slider.php">Blogs <span class="hidden-md-down hidden-sm-down hidden-xs-down"><i class="fa fa-angle-right"></i></span></a>
                                        <ul class="dropdown-menu">
                                           <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" href="single-fullwidth.php">Write A Blog</a></li>
                                            <li><a class="dropdown-item" href="single-slider.php">Your Blog</a></li>
                                        </ul>
                                        </ul>
                                    </li>
                                    
                                        </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-pink-hover" href="cp/index.html">College Predictor</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link color-pink-hover" href="logout.php">Log Out</a>
                            </li>
                            
                        </ul>
                    </div>
                </nav>
            </div><!-- end container -->
        </header><!-- end header -->

 <form action="#" method="post" enctype="multipart/form-data">
            <input type="file" name="image"><br/>
            <tr><tr><input placeholder="Title" name="title" type="text" autofocus size="48"><br/><br/>
            <tr><tr><textarea placeholder="Content" name="content" rows="20" cols="50"></textarea><br/>
            <tr><tr><input name="post" type="submit" value="Post">
            
        </form>

        <footer class="footer">
            <div class="container">
                    
                <hr class="invis1">

                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="widget">
                            <div class="footer-text text-center">
                                <a href="afterlogin.php"><img src="images/flogo.png" alt="" class="img-fluid"></a>
                                <p>SVVV-O-pedia is a personal blog for handcrafted, cameramade photography content, fashion styles from all students of college.</p>
                                <div class="social">
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                    <a href="#" data-toggle="tooltip" data-placement="bottom" title="Instagram"><i class="fa fa-instagram"></i></a>
                                   
                                </div>

                                <hr class="invis">

                               
                            </div><!-- end footer-text -->
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <br>
                        <div class="copyright">&copy; SVVV-O-pedia.</div>
                    </div>
                </div>
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="dmtop">Scroll to Top</div>
        
    </div><!-- end wrapper -->

    <!-- Core JavaScript
    ================================================== -->
    <script src="js/jquery.min.js"></script>
    <script src="js/tether.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>

</body>
</html>