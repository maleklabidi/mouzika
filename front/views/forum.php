<?php
include_once '../controller/ForumM.php';
$post=new ForumManage();
$posts=$post->afficherPost();

if ((isset($_POST["recherche"]))&& (isset($_POST["colonne"]))){
    if (!empty(isset($_POST["recherche"]))){ 
     $n=$_POST["colonne"];
      $posts=$post->rechercher($_POST["recherche"],$n);
    } 
     }
?> 

<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">  
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mouzika</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="../img/logo.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/magnific-popup.css">
    <link rel="stylesheet" href="../css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/themify-icons.css">
    <link rel="stylesheet" href="../css/nice-select.css">
    <link rel="stylesheet" href="../css/flaticon.css">
    <link rel="stylesheet" href="../css/gijgo.css">
    <link rel="stylesheet" href="../css/animate.css">
    <link rel="stylesheet" href="../css/slicknav.css">                     
    <link rel="stylesheet" href="../css/style.css">
    <!-- <link rel="stylesheet" href="../css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->                                  

    <!-- header-start -->                               
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                <a href="index.html">
                                        <img src="../img/logo.png" alt="">
                                    </a>
                                
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>             
                                        <ul id="navigation">
                                            <li><a class="active" href="../index.html">home</a></li>
                                            <li><a href="../about.html">About</a></li>
                                            <li><a href="../track.html">tracks</a></li>
                                            <li><a href="#">blog </a>
                                                <!-- <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                  
                                                </ul> --> 
                                            </li>
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                     <li><a href="../elements.html">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="../contact.html">Contact</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                                <div class="social_icon text-right">
                                    <ul>
                                        <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                        <li><a href="#"> <i class="fa fa-instagram"></i> </a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mobile_menu d-block d-lg-none"></div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </header>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area breadcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>blog</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->


  <section></section>  <section></section>
			<!-- breadcrumbs-area-start -->
			<div class="breadcrumbs-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="breadcrumb-content text-center">
								<?php 
											include_once '../controller/ForumM.php';
											$post=new ForumManage();
							    			
				
											
											
											?>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- breadcrumbs-area-end -->
			<!-- shop-main-area-start -->
			<div class="shop-main-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<!-- blog-total-area-start -->
							<div class="blog-total-area mb-40-2">
								<div class="row">
									
									<?php foreach ($posts as $row) { ?>
									<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
										<!-- single-blog-2-start -->
										<div class="single-blog single-blog-2 mb-30">
                                        <div class="blog-2-img">
												 <a href="forum-detail.php?id=<?php echo$row['id']; ?>"><img src="
                         <?php 
                            echo "../".$row['image'];
                         ?>"
                          alt="man" /> 
                          </a>
											</div>
											<div class="blog-2-content blog-content">
												<?php 
											$timeadd=$row['date_post'];
                                            $date1 = date('Y-m-d',strtotime($timeadd));
                                            $time1 = date('H:i',strtotime($timeadd));
                                            $date1 = explode('-', $date1);
                                            $year = $date1[0];
                                            $month   = $date1[1];
                                            $day  = $date1[2];
                                            $monthName = date("F", mktime(0, 0, 0, $month, 10));?>
												<span><?php echo $monthName." ".$day.", ".$year; ?></span>
												<h3><a href="forum-detail.php?id=<?php echo$row['id']; ?>"><?php echo $row['titre']; ?></a></h3>
												
												<p><?php 
												$text=$row['post'];
												$text1=substr($text, 0, 200);
												echo $text1; ?></p>
												<a href="forum-detail.php?id=<?php echo $row['id']; ?>">Read more ...</a>
											</div>
										</div>
										<!-- single-blog-2-end -->
									</div>
									<?php } ?>
								</div>
							</div>
							<!-- blog-total-area-end -->
						</div>
						<div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
							<!-- blog-right-area-start -->
							<div class="blog-right-area">

								<!-- blog-right-start -->
                                <form method="POST" action="">
        <select name="colonne" class=" flex-c-m text-center size-905 bor4 pointer hov-btn3"  style="width: 180px;">
        <option value="all" >all</option>
          <option value="titre">titre </option>
          <option value="categorie">Categorie </option>
          <option value="date_post">date_post</option>
        </select>
          <input type="text" name="recherche" placeholder="search" class=" m-b-10 flex-c-m text-center size-105 bor4 pointer hov-btn3  m-tb-4 "> 
          <input type="submit" name="chercher" value="Validate" class="m-t-0 flex-c-m text-center size-105 bor4 pointer hov-btn3  m-tb-4" style="width: 180px;">

         
         </form>

         

								<!-- <div class="blog-right mb-50 mb-3">
									<form action="recherche.php">
										<input type="text" placeholder="Search Here"/>
										<button type="submit"><i class="fa fa-search"></i></button>
									</form>
								</div> -->
						</div>
                        
					</div>
				</div>
			</div>



    <!-- footer start -->
    <footer class="footer">
        <div class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6 col-md-6">
                            <div class="footer_widget">
                                    <h3 class="footer_title">
                                            Services
                                    </h3>
                                <div class="subscribe-from">
                                        <form action="#">
                                                <input type="text" placeholder="Enter your mail">
                                                <button type="submit" >Subscribe</button>
                                            </form>
                                </div>
                                
                                </div>
                    </div>
                    <div class="col-xl-5 col-md-5 offset-xl-1">
                        <div class="footer_widget">
                                <h3 class="footer_title">
                                        Contact Me
                                </h3>
                            <ul>
                                <li><a href="#">
                                    </a></li>
                                <li><a href="#">+216-94261406
                                    </a></li>
                                <li><a href="#">Ariana essoghra, Roued chotrana</a></li>
                            </ul>
                            <div class="socail_links">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <i class=" fa fa-facebook "></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-google-plus"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-twitter"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-youtube-play"></i>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-instagram"></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copy-right_text">
            <div class="container">
                <div class="footer_border"></div>
                <div class="row">
                    <div class="col-xl-7 col-md-6">
                        <p class="copy_right">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                    <div class="col-xl-5 col-md-6">
                        <div class="footer_links">
                            <ul>
                                <li><a href="#">home</a></li>
                                <li><a href="#">about</a></li>
                                <li><a href="#">tracks</a></li>
                                <li><a href="#">blog</a></li>
                                <li><a href="#">contact</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/ footer end  -->
    <!-- JS here -->
    <script src="../js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="../js/vendor/jquery-1.12.4.min.js"></script>
    <script src="../js/popper.min.js"></script>
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/owl.carousel.min.js"></script>
    <script src="../js/isotope.pkgd.min.js"></script>
    <script src="../js/ajax-form.js"></script>
    <script src="../js/waypoints.min.js"></script>
    <script src="../js/jquery.counterup.min.js"></script>
    <script src="../js/imagesloaded.pkgd.min.js"></script>
    <script src="../js/scrollIt.js"></script>
    <script src="../js/jquery.scrollUp.min.js"></script>
    <script src="../js/wow.min.js"></script>
    <script src="../js/nice-select.min.js"></script>
    <script src="../js/jquery.slicknav.min.js"></script>
    <script src="../js/jquery.magnific-popup.min.js"></script>
    <script src="../js/plugins.js"></script>
    <script src="../js/gijgo.min.js"></script>

    <!--contact js-->
    <script src="../js/contact.js"></script>
    <script src="../js/jquery.ajaxchimp.min.js"></script>
    <script src="../js/jquery.form.js"></script>
    <script src="../js/jquery.validate.min.js"></script>
    <script src="../js/mail-script.js"></script>

    <script src="../js/main.js"></script>
    <script>
        $('#datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }
        });
        $('#datepicker2').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
             rightIcon: '<span class="fa fa-caret-down"></span>'
         }

        });
    </script>
</body>
</html>