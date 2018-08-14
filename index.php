<!DOCTYPE html>
<html lang="zxx">
<head>        

        <!-- Meta -->
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1">

        <!-- Title -->
        <title>..:: LIBRARIA ::..</title>

        <!-- Favicon -->
        <link href="public_html/images/favicon.ico" rel="icon" type="image/x-icon" />

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i%7CLato:100,100i,300,300i,400,400i,700,700i,900,900i" rel="stylesheet" />
        <link href="../css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        
        <!-- Mobile Menu -->
        <link href="../css/mmenu.css" rel="stylesheet" type="text/css" />
        <link href="../css/mmenu.positioning.css" rel="stylesheet" type="text/css" />

        <!-- Stylesheet -->
        <link href="../style.css" rel="stylesheet" type="text/css" />

    </head>

    <body class="layout-v3">
        
        <!-- Start: Header Section -->
        <header id="header" class="navbar-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="menu-wrap">
                            <div class="navbar-header">
                                <div class="navbar-brand">
                                    <h1>
                                        <a href="index.php">
                                            <img src="../images/libraria-logo-v3.png" alt="LIBRARIA" />
                                        </a>
                                    </h1>
                                </div>
                            </div>
                            <!-- Navigation -->
                            <div class="navbar-collapse hidden-sm hidden-xs">
                                <ul class="nav navbar-nav">
                                    <li class="dropdown active">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="index.php">Home</a>
                                    </li>
                                    <li class="dropdown">
                                        <a data-toggle="dropdown" class="dropdown-toggle disabled" href="books-media-gird-view-v2.php">Books &amp; Media PDFs</a>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-md">
                                    <div class="topbar-links">
                                    <?php 
                                    @session_start();
                                    if(!isset($_SESSION['email'])){
                                        echo '<a href="signin.php"><i class="fa fa-lock"></i>Login / Register</a>';
                                    }
                                    else{
                                        echo '<a href="user-dash-board.php"><i class="fa fa-user"></i> '.$_SESSION['name'].'</a>';
                                    }
                                    ?>
                                    </div>
                                </div>
                                <!-- Header Topbar -->
                            </div>
                        </div>
                        <div class="mobile-menu hidden-md hidden-lg">
                        <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                <ul>
                                    <li class="mobile-title">
                                        <h4>Navigation</h4>
                                        <a href="#" class="close"></a>
                                    </li>
                                    <li>
                                        <a href="index.php">Home</a>
                                    </li>
                                    <li>
                                        <a href="books-media-gird-view-v2.php">Books &amp; Media PDFs</a>
                                    </li>
                                    <li><a href="contact.php">Contact</a></li>
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
        <!-- End: Header Section -->

        <!-- Start: Slider Section -->
        <div data-ride="carousel" class="carousel slide" id="home-v1-header-carousel">
            <!-- Carousel slides -->
            <div class="carousel-inner">
                <div class="item active">
                    <figure>
                        <img alt="Home Slide" src="../images/header-slider/home-v3/header-slide.jpg" />
                    </figure>
                    <div class="container">
                        <div class="carousel-caption">
                            <h2>What’s all the Libraria?</h2>
                            <p><i><u>Libraria gives you access to Research PDFs, eBooks and Documentations</u></i> </p>
                            <p style="color:Black"; ><H2><i>Research works</i></H2></p>
                            <div class="filter-box">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Slider Section -->

        <!-- Start: Welcome Section -->
        <section class="welcome-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-wrap">
                            <div class="welcome-text">
                                <h2 class="section-title">Welcome to the libraria</h2>
                                <span class="underline left"></span>
                                <p>The research papers are tooo much important for the field of scholars... As we know the availability of them is not too good.Sometimes we face problem while downloading them and even in getting the exact content of the PDFs. Now this Problem will be no more in day todays life for us because this website gives us 100% priveleges for interacting with Researchers and we can view there PDFs in the format of IEEE as it is...  We can use it with our authority and can manage them also... Thats why this LIBRARIA website is very much usefull for us....
                                Thanks a lot for reading the content...............May you have a great day with LIBRARIA.... I hope you will enjoy it...</p>
                                <a class="btn btn-dark-gray" href="#">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="welcome-image"></div>
        </section>
        <!-- End: Welcome Section -->
        
        <!-- Start: Footer -->
        <footer class="site-footer">
            <div class="sub-footer">
                <div class="container">
                    <div class="row">
                        <div class="footer-text col-md-3">
                            <p>&copy; 2017 LIBRARIA. All rights reserved.</p>
                        </div>
                        <div class="col-md-9 pull-right">
                            <ul>
                                <li><a href="index.php">Home</a></li>
                                <li><a href="books-media-gird-view-v2.php">Books &amp; Media PDFs</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- End: Footer -->

        <!-- jQuery Latest Version 1.x -->
        <script type="text/javascript" src="../js/jquery-1.12.4.min.js"></script>
        
        <!-- jQuery UI -->
        <script type="text/javascript" src="../js/jquery-ui.min.js"></script>
        
        <!-- jQuery Easing -->
        <script type="text/javascript" src="../js/jquery.easing.1.3.js"></script>

        <!-- Bootstrap -->
        <script type="text/javascript" src="../js/bootstrap.min.js"></script>
        
        <!-- Mobile Menu -->
        <script type="text/javascript" src="../js/mmenu.min.js"></script>
        
        <!-- Harvey - State manager for media queries -->
        <script type="text/javascript" src="../js/harvey.min.js"></script>
        
        <!-- Waypoints - Load Elements on View -->
        <script type="text/javascript" src="../js/waypoints.min.js"></script>

        <!-- Facts Counter -->
        <script type="text/javascript" src="../js/facts.counter.min.js"></script>

        <!-- MixItUp - Category Filter -->
        <script type="text/javascript" src="../js/mixitup.min.js"></script>

        <!-- Owl Carousel -->
        <script type="text/javascript" src="../js/owl.carousel.min.js"></script>
        
        <!-- Accordion -->
        <script type="text/javascript" src="../js/accordion.min.js"></script>
        
        <!-- Responsive Tabs -->
        <script type="text/javascript" src="../js/responsive.tabs.min.js"></script>
        
        <!-- Responsive Table -->
        <script type="text/javascript" src="../js/responsive.table.min.js"></script>
        
        <!-- Masonry -->
        <script type="text/javascript" src="../js/masonry.min.js"></script>
        
        <!-- Carousel Swipe -->
        <script type="text/javascript" src="../js/carousel.swipe.min.js"></script>
        
        <!-- bxSlider -->
        <script type="text/javascript" src="../js/bxslider.min.js"></script>
        
        <!-- Custom Scripts -->
        <script type="text/javascript" src="../js/main.js"></script>

    </body>

</html>