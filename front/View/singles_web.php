<?php
session_start();
include '../Model/singles.php';
include '../Controller/singlesC.php'; 

	$singleC=new singlesC();
	$listesingles=$singleC->affichersingle(); 
     
  $db = config::getConnexion();
 
  
  $start = 0; 
  $per_page=4;  // 9adeh men commission par page todhher
  $page_counter = 0; 
  $next = $page_counter+1; 
  $previous = $page_counter -1; 
  
  if (isset($_GET['start']))
  {
      $start = $_GET['start']; 
      $page_counter=$_GET['start']; 
      $start= $start * $per_page; 
      $next = $page_counter +1; 
      $previous = $page_counter -1 ; 
  
  }
 
  $sql = "SELECT * FROM singles limit $start, $per_page";
  $query=$db->prepare($sql); 
  $query->execute();  
  
  if($query->rowCount() > 0){ //ken table moch fergha 
      $result = $query->fetchAll(PDO::FETCH_ASSOC);
  }
  $count=$listesingles->rowCount(); 
  //arrondissement
  $paginations=ceil($count/$per_page); // $pagination: kadeh men link taa pagination bech ikoun mawjoud 
  //ceil fonction taa arrondissement



?>
<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Mouzika</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/pagination.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="css/nice-select.css">
    <link rel="stylesheet" href="css/audioplayer.css">
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/gijgo.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/slick.css">
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/style.css">
    <!-- <link rel="stylesheet" href="css/responsive.css"> -->
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- header-start -->
    <!-- 
  ***********************************************************************************************************************************
  ***********************************************************************************************************************************
  *********************************************************INTEGRATION HERE**********************************************************
  ***********************************************************************************************************************************
  ***********************************************************************************************************************************
-->
    <header>
        <div class="header-area ">
            <div id="sticky-header" class="main-header-area">
                <div class="container-fluid">
                    <div class="header_bottom_border">
                        <div class="row align-items-center">
                            <div class="col-xl-3 col-lg-2">
                                <div class="logo">
                                    <a href="index.html">
                                        <img src="img/logo_mouzika.jpg" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-7">
                                <div class="main-menu  d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a class="active" href="index.html">home</a></li>
                                            <li><a href="about.html">About</a></li>
                                            <li><a href="#">Discographie<i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="singles_web.php">Singles</a></li>
                                                    <li><a href="albums_web.php">Albums</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">blog <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                    <li><a href="blog.html">blog</a></li>
                                                    <li><a href="single-blog.html">single-blog</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">pages <i class="ti-angle-down"></i></a>
                                                <ul class="submenu">
                                                     <li><a href="elements.html">elements</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html">Contact</a></li>
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
    <!-- 
  ***********************************************************************************************************************************
  ***********************************************************************************************************************************
  *********************************************************INTEGRATION HERE**********************************************************
  ***********************************************************************************************************************************
  ***********************************************************************************************************************************
-->

    <!-- bradcam_area  -->
    <div class="bradcam_area breadcam_bg_2">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="bradcam_text text-center">
                        <h3>Les singles</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ bradcam_area  -->
    
    
    <style> 
    body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  padding-top: 100px; /* Location of the box */
  left: 0;
  top: 150px;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  border: 1px solid #888;
  width: 80%;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
  -webkit-animation-name: animatetop;
  -webkit-animation-duration: 0.4s;
  animation-name: animatetop;
  animation-duration: 0.4s
}

/* Add Animation */
@-webkit-keyframes animatetop {
  from {top:-300px; opacity:0} 
  to {top:0; opacity:1}
}

@keyframes animatetop {
  from {top:-300px; opacity:0}
  to {top:0; opacity:1}
}

/* The Close Button */
.close {
  color: white;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #000;
  text-decoration: none;
  cursor: pointer;
}

.modal-header {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.modal-body {padding: 2px 16px;}

.modal-footer {
  padding: 2px 16px;
  background-color: #5cb85c;
  color: white;
}

.size { 
    padding: 100px 100px;
    background: transparent;
    border: none !important;
}
</style>
    <!-- music_area  -->

     <div style="margin-top:30px ;" > 
        <br>
        <br>
        <br>
      <center> <h2> Savourez la musique de nos artistes tunisiens!</h2> </center>  
    </div> 


    <div class="music_area music_gallery inc_padding">
        <div class="container">
          <?php foreach($result as $single):?>
            <div class="row align-items-center justify-content-center mb-20">
                <div class="col-xl-10">
                    <div class="row align-items-center">
                                <div class="col-xl-9 col-md-9">
                                    <div class="music_field">
                                            <div class="thumb">
                                                    <img src="<?php echo "../../back/View/".$single["artist_image"]; ?>" width="150" height="150" alt="">
                                                </div>
                                                <div class="audio_name">
                                                    <div class="name">
                                                        <h4><?PHP echo $single['artist']; ?> - <?PHP echo $single['single_name']; ?></h4>
                                                        <p><?PHP echo $single['release_date']; ?></p>
                                                    </div>
                                                        <audio preload="auto" controls>
                                                                <source src="<?php echo "../../back/View/".$single["audio"]; ?>">
                                                            </audio>
                                                </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-3">
                                    <div class="music_btn">
                                    <div class="popup">

                                        <!-- The Modal -->
                                    <div id='myModal-<?= $single['id']?>' class="modal">

                                        <!-- Modal content -->
                                        <div class="modal-content">
                                            <div class="modal-header">
                                            <span onclick="closeModal()" class="close">&times;</span>
                                            <h2><?PHP echo $single['single_name']; ?></h2>
                                            </div>
                                            <div class="modal-body">
                                            <p>Donnez une note à ce single:</p>
                                            


                                            <link rel="stylesheet" href="css/rating.css">


                                            <form method="POST">
                                            <?php
                                            $rating=$single['rate'];
                                            ?>
                                            <h2>ID: <?PHP echo $single['id']; ?></h2>
                                            <input class="star star-5" id="star-5-<?= $single['id']?>" type="radio" name="star" value="5"<?php echo ($rating=='5')?'checked':'' ?>/>
                                            <label class="star star-5" for="star-5-<?= $single['id']?>"></label>
                                            <input class="star star-4" id="star-4-<?= $single['id']?>" type="radio" name="star" value="4" <?php echo ($rating=='4')?'checked':'' ?>/>
                                            <label class="star star-4" for="star-4-<?= $single['id']?>"></label>
                                            <input class="star star-3" id="star-3-<?= $single['id']?>" type="radio" name="star" value="3" <?php echo ($rating=='3')?'checked':'' ?>/>
                                            <label class="star star-3" for="star-3-<?= $single['id']?>"></label>
                                            <input class="star star-2" id="star-2-<?= $single['id']?>" type="radio" name="star" value="2" <?php echo ($rating=='2')?'checked':'' ?>/>
                                            <label class="star star-2" for="star-2-<?= $single['id']?>"></label>
                                            <input class="star star-1" id="star-1-<?= $single['id']?>" type="radio" name="star" value="1"<?php echo ($rating=='1')?'checked':'' ?>/>
                                            <label class="star star-1" for="star-1-<?= $single['id']?>"></label>
                                            <input type="hidden" name="id" value="<?PHP echo $single['id']; ?>">
                                            <input type="submit" value="Confirmer" name="confirmer" class='btn btn-info'>
                                            </form>

                                            <script src="https://kit.fontawesome.com/5ea815c1d0.js"></script>
                                            <?php 
                                            //TO APPLY THE CHANGES
                                            if (isset($_POST['confirmer']))
                                            {   
                                                
                                                $db = config::getConnexion();
				                                $query = $db->prepare('UPDATE singles SET 
						                        rate = :rate
					                            WHERE id = :id'
                                                );
                                                $query->bindValue(':rate',$_POST["star"]);
                                                $query->bindValue(':id',$_POST["id"]);
                                                $query->execute();

                                                echo "<meta http-equiv='refresh' content='0'>";
                                                break;
                                            }   
                                            ?>
                                            </div>
                                            <div class="modal-footer">
                                            <h3><?PHP echo $single['artist']; ?></h3>
                                            </div>  
                                        </div>

                                    </div>
                                </div>
                                    
                                    <button id="myBtn" name="modal" class="btn btn-info" onclick="ShowModal('myModal-<?= $single['id']?>')">Evaluer</button>
                                    
                                    </div>
                                </div>
                    </div>
                    
                </div>

            </div>
            
            
            <?php
				endforeach;
			?> 
            <center>
 
 <ul class="pagination" style="float: center;">
  
  
 <?php
  
  
 if( $page_counter == 0){
 echo "<li><a href=?start='0' class='active'>0</a></li>";
 for($j=1; $j < $paginations; $j++) { 
     
   echo "<li><a href=?start=$j>".$j."</a></li>";
 }
 }
 else{
 echo "<li><a href=?start=$previous>Previous</a></li>"; 
  
  
 for($j=0; $j < $paginations; $j++) {
    if($j == $page_counter) {
        echo "<li><a href=?start=$j class='active'>".$j."</a></li>";
     }else{
        echo "<li><a href=?start=$j>".$j."</a></li>";
     } 
     
        }
        if($j != $page_counter+1)
          echo "<li><a href=?start=$next>Next</a></li>"; 
        } 
      ?>
      </ul>
      </center>
    

            </div>
        </div>
    <!-- music_area end  -->

    <!-- contact_rsvp -->
    <div class="contact_rsvp">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="text text-center">
                        <h3>Contact For RSVP</h3>
                        <a class="boxed-btn3" href="contact.html">Contact Me</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ contact_rsvp -->

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

    <!-- link that opens popup -->

    <!-- JS here -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" 
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" 
            crossorigin="anonymous">
    </script>
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
    <script src="js/audioplayer.js"></script>
    <script src="js/scrollIt.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/nice-select.min.js"></script>
    <script src="js/jquery.slicknav.min.js"></script>
    <script src="js/jquery.magnific-popup.min.js"></script>
    <script src="js/plugins.js"></script>
    <script src="js/gijgo.min.js"></script>
    <script src="js/slick.min.js"></script>
    <!--contact js-->
    <script src="js/contact.js"></script>
    <script src="js/jquery.ajaxchimp.min.js"></script>
    <script src="js/jquery.form.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/mail-script.js"></script>

    <script src="js/main.js"></script>
    
		<script>
                $(function() {
                    $('audio').audioPlayer({

                    });
                });
            </script>
<script>

// Get the modal
var latest_modal

// When the user clicks the button, open the modal 
const ShowModal = (id) =>
{
    var modal = document.getElementById(id);
    modal.style.display = "block";
    latest_modal = modal;
}    

// When the user clicks on <span> (x), close the modal
const closeModal = () =>
{
    latest_modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == latest_modal) {
        latest_modal.style.display = "none";
    }
}

</script>
</body>

</html>