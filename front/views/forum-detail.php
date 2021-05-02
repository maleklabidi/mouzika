<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8"><!doctype html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>Musico</title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">

   <!-- <link rel="manifest" href="site.webmanifest"> -->
   <link rel="shortcut icon" type="image/x-icon" href="C:/xampp/htdocs/projet_web/front/img/logo.png">
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
                                      <img src="C:/xampp/htdocs/projet_web/front/img/logo.png" alt="">
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
                                          <li><a href="forum.php">blog </a>
                                             <!--  <ul class="submenu">
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
                      <h3>blog details</h3>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!--/ bradcam_area  -->
  <section></section>  <section></section>
			<!-- shop-main-area-start -->
			<div class="shop-main-area">
				<div class="container">
					<div class="row">
						<div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
							<!-- blog-details-area-start -->
							<div class="blog-details-area mb-40-2">
									<?php 
											include_once '../controller/ForumM.php';
											/*include "../Utilisateur/ClientC.php";
											$ClientManage=new ClientManage();
											$cli=$ClientManage->recupererClient($_SESSION['id']);*/
											$post=new ForumManage();
							    			$result=$post->recupererPost($_GET['id']);
							    			$posts=$post->afficherPost();
							    			$max=$post->maxPost();
							    			$min=$post->minPost();
											$coment=$post->recupererCommentaire($_GET['id']);
											$number_of_rows = $coment->rowCount(); 
											/*foreach ($cli as $val1) {
											$nom=$val1['nom'];
											}*///pour afficher l'utilisateur 
											foreach ($max as $val1) {
											$max1=$val1['max_post'];
											}
											foreach ($min as $val1) {
											$min1=$val1['min_post'];
											}
											foreach ($result as $val) {?>
								<h3><a href="#"><?php echo $val['categorie'];?></a></h3>
								<div class="blog-info">
									<h3><a href="#"><?php echo $val['titre'];?></a></h3>
									<p><?php echo $val['post'];?>
									<br />
									
									
									
									<div class="user-info">
										<div class="row">
											<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
												<div class="cats-tags-wrap mb-3">
													<i class="fa fa-list-alt"></i>Categorys: <a href="#"><?php echo $val['categorie'];?></a>
												</div>
											</div>
											<?php } $id=$_GET['id'];?>	
												
										</div>
									</div>
									<div class="next-prev-area">
										<a href="<?php  if($id-1<$min1) {$id=$min1; echo  "forum-detail.php?id=".$id=$id;} else echo "forum-detail.php?id=".$id=$id-1;  ?>" class="next"><i class="fa fa-angle-left"></i>prev post</a>
										<a href="<?php echo "forum-detail.php?id=".$id=$id+1; if($max1<$id) $id=$max1;?>" class="previews">next post<i class="fa fa-angle-right"></i></a>
									</div>
								</div>
								<!-- comments-area-start -->
								<div class="comments-area mt-40">
									
									
									<?php 
									
									foreach ($coment as $val2) {
										?>
									<!-- single-comments-start -->
									<div class="single-comments single-comments-2">
										
										<div class="comment-text">
											<a href="#"><?php echo $val2['nom']; ?></a>
											<?php 
											$timeadd=$val2['date_com'];
                                            $date1 = date('Y-m-d',strtotime($timeadd));
                                            $time1 = date('H:i',strtotime($timeadd));
                                            $date1 = explode('-', $date1);
                                            $year = $date1[0];
                                            $month   = $date1[1];
                                            $day  = $date1[2];
                                            $monthName = date("F", mktime(0, 0, 0, $month, 10));?>
											<span><?php echo $monthName." ".$day.", ".$year." at ".$time1; ?></span>
											<p><?php echo $val2['comment']; ?></p>
				
											
										</div>
									</div>
									<?php } ?>
									<!-- single-comments-end -->
								</div>
								<!-- comments-area-end -->
								<!-- comment-respond-area-start -->
								<div class="comment-respond-area mb-3">
									<h3>Entrez Votre Commentaire</h3>
									<div class="single-form">
										<form action="ajouter-commentaire.php" method="POST">
											<textarea name="comment" id="comment" cols="30" rows="10" placeholder="Entrez votre commentaire *"></textarea>
											<input name="id_client"  type="hidden" value="01" />
											<input name="id_post"  type="hidden" value="<?php echo $_GET['id']; ?>" />
											<input name="nom"  type="hidden" value="Utilisateur X" />

									</div>
									
									<div class="single-register">
									<input type="submit" class="confirmer" value="Comment">
								</div>
									</form>
								</div>
								<!-- comment-respond-area-end -->
							</div>
							<!-- blog-details-area-end -->
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
   <script src="js/vendor/modernizr-3.5.0.min.js"></script>
   <script src="js/vendor/jquery-1.12.4.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/isotope.pkgd.min.js"></script>
   <script src="js/ajax-form.js"></script>
   <script src="js/waypoints.min.js"></script>
   <script src="js/jquery.counterup.min.js"></script>
   <script src="js/imagesloaded.pkgd.min.js"></script>
   <script src="js/scrollIt.js"></script>
   <script src="js/jquery.scrollUp.min.js"></script>
   <script src="js/wow.min.js"></script>
   <script src="js/nice-select.min.js"></script>
   <script src="js/jquery.slicknav.min.js"></script>
   <script src="js/jquery.magnific-popup.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/gijgo.min.js"></script>

   <!--contact js-->
   <script src="js/contact.js"></script>
   <script src="js/jquery.ajaxchimp.min.js"></script>
   <script src="js/jquery.form.js"></script>
   <script src="js/jquery.validate.min.js"></script>
   <script src="js/mail-script.js"></script>

   <script src="js/main.js"></script>
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