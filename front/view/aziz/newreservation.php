<?PHP
	include_once '../../Model/Reservation.php';
	include_once '../../Controller/reservationC.php'; 

	$error = "";
	$reservation = null; 

 


	$reservationC = new reservationC();
	if (
		isset($_POST["id_utilisateur"]) &&
        isset($_POST["id_artiste"]) && 
        isset($_POST["lieu"]) && 
        isset($_POST["date"]) && 
        isset($_POST["type"]) 
	) {
		if (!empty($_POST["id_utilisateur"]) && 
            !empty($_POST["id_artiste"]) &&
            !empty($_POST["lieu"]) &&
            !empty($_POST["date"]) &&
            !empty($_POST["type"]) 
            
		) {
			$reservation = new reservation(
				$_POST['id_utilisateur'], 
                $_POST['id_artiste'],
                $_POST['lieu'],
                $_POST['date'],
                $_POST['type']
			);
			$reservationC->ajouterreservation($reservation);
			header('Location:affichageartistes.php');
            
		}
		else
			$error = "Missing information";
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
	<link rel="shortcut icon" type="../image/x-icon" href="../img/favicon.png">
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
    <link rel="stylesheet" href="../1.css">
    <link rel="stylesheet" href="../css/star.css">
	<!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
	<!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
     <!-- header-start -->
     <header>
     <?php include "../navbar.php"?>
    </header>
    <!-- header-end -->

    <!-- bradcam_area  -->
    <div class="bradcam_area breadcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Reservation</h3>
                    </div>
                </div>
            </div>
        </div>
     </div>
     <!--/ bradcam_area  -->
    <!-- Start Align Area -->

    <h3 class="mb-30">Effectuer une reservation</h3>
						<form method="POST" id="form">
							<div class="mt-10">
								<input type="text" name="id_utilisateur" placeholder="id_utilisateur"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'id_utilisateur'" required
									class="single-input" id="id_utilisateur" >
							</div>
							<div class="mt-10">
								<input type="text" name="id_artiste" placeholder="id_artiste"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'id_artiste'" required
									class="single-input" id="id_artiste">
							</div>
							<div class="mt-10">
								<input type="text" name="type" placeholder="type"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'type'" required
									class="single-input" id="type">
							</div>
							<div class="mt-10">
								<input type="date" name="date" placeholder="date"
									onfocus="this.placeholder = ''" onblur="this.placeholder = 'date'" required
									class="single-input" id="date">
							</div>
							<div class="input-group-icon mt-10">
								<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
								<input type="text" name="lieu" placeholder="lieu" onfocus="this.placeholder = ''"
									onblur="this.placeholder = 'lieu'" required class="single-input" id="lieu">
							</div>
                            <input type="submit" value="Confirmer" class="submit" id="Confirmer" name="Confirmer" /> 
           
           
                            <input type="reset" value="Reset" class="submit" id="reset" name="reset" />
							
						</form>
                </div>
                </div>


                  </tbody>
                </table>
              </div>



	 <!-- Start Sample Area -->
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
                                <p class="sub_text">Esteem spirit temper too say adieus who direct esteem esteems luckily.</p>
                                </div>
                    </div>
                    <div class="col-xl-5 col-md-5 offset-xl-1">
                        <div class="footer_widget">
                                <h3 class="footer_title">
                                        Contact Me
                                </h3>
                            <ul>
                                <li><a href="#">conbusi@support.com
                                    </a></li>
                                <li><a href="#">+10 873 672 6782
                                    </a></li>
                                <li><a href="#">600/D, Green road, Kings Garden NewYork-6732</a></li>
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