<?php
	include '../Model/singles.php';
	include '../Controller/singlesC.php'; 

	$singleC = new singlesC();
	$error = "";

	?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mouzika | Modification</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="index.html" class="nav-link">Home</a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="#" class="nav-link">Contact</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
      <li class="nav-item">
        <a class="nav-link" data-widget="navbar-search" href="#" role="button">
          <i class="fas fa-search"></i>
        </a>
        <div class="navbar-search-block">
          <form class="form-inline">
            <div class="input-group input-group-sm">
              <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
              <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                  <i class="fas fa-search"></i>
                </button>
                <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                  <i class="fas fa-times"></i>
                </button>
              </div>
            </div>
          </form>
        </div>
      </li>

      <!-- Messages Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-comments"></i>
          <span class="badge badge-danger navbar-badge">3</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user1-128x128.jpg" alt="User Avatar" class="img-size-50 mr-3 img-circle">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Brad Diesel
                  <span class="float-right text-sm text-danger"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">Call me whenever you can...</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user8-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  John Pierce
                  <span class="float-right text-sm text-muted"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">I got your message bro</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <!-- Message Start -->
            <div class="media">
              <img src="dist/img/user3-128x128.jpg" alt="User Avatar" class="img-size-50 img-circle mr-3">
              <div class="media-body">
                <h3 class="dropdown-item-title">
                  Nora Silvester
                  <span class="float-right text-sm text-warning"><i class="fas fa-star"></i></span>
                </h3>
                <p class="text-sm">The subject goes here</p>
                <p class="text-sm text-muted"><i class="far fa-clock mr-1"></i> 4 Hours Ago</p>
              </div>
            </div>
            <!-- Message End -->
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Messages</a>
        </div>
      </li>
      <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-bell"></i>
          <span class="badge badge-warning navbar-badge">15</span>
        </a>
        <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
          <span class="dropdown-item dropdown-header">15 Notifications</span>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-envelope mr-2"></i> 4 new messages
            <span class="float-right text-muted text-sm">3 mins</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-users mr-2"></i> 8 friend requests
            <span class="float-right text-muted text-sm">12 hours</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item">
            <i class="fas fa-file mr-2"></i> 3 new reports
            <span class="float-right text-muted text-sm">2 days</span>
          </a>
          <div class="dropdown-divider"></div>
          <a href="#" class="dropdown-item dropdown-footer">See All Notifications</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link" data-widget="control-sidebar" data-slide="true" href="#" role="button">
          <i class="fas fa-th-large"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Mouzika Dashboard</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Vous êtes connecté en tant
              <br>
              qu'admin.
          </a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <!-- 
  ***********************************************************************************************************************************
  ***********************************************************************************************************************************
  *********************************************************INTEGRATION HERE**********************************************************
  ***********************************************************************************************************************************
  ***********************************************************************************************************************************
-->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
         
               <li class="nav-item">
            <a href="singles_web.php" class="nav-link">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p class="text">Singles</p>
            </a>
          </li>
          <li class="nav-item">
            <a href="albums_web.php" class="nav-link">
              <i class="nav-icon far fa-circle text-warning"></i>
              <p>Albums</p>
            </a>
          </li>
         
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
<!-- 
  ***********************************************************************************************************************************
  ***********************************************************************************************************************************
  *********************************************************INTEGRATION HERE**********************************************************
  ***********************************************************************************************************************************
  ***********************************************************************************************************************************
-->
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Page de modification</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">DataTables</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
   
      <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
    <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Modifiez ce single:</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                   
                  </thead>
                  <tbody>
                 
	
    <button onclick="location.href='singles_web.php'" class="button">Retour à la liste</button>
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
                $single = $singleC->recuperersingle($_GET['id']);
				
		?>
     <style>
.button {
  background-color: #f44336;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
  border-radius: 8px;
  box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2), 0 6px 20px 0 rgba(0,0,0,0.19);
} </style> 
		<form  method="POST" enctype="multipart/form-data">
            <table align="center">
                <tr>
                    <td>
                        <label for="id">id:
                        </label>
                    </td>
                    <td><input type="text" name="id" id="id"  value = "<?php echo $single->id; ?>"></td>
                </tr>
                <tr>
                    <td>
                        <label for="title">Nom du single:
                        </label>
                    </td>
                    <td><input type="text" name="single_name" id="single_name"  value = "<?php echo $single->single_name; ?>"></td>
                </tr>
                
                <tr>
                    <td>
                        <label for="artist">Artiste:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="artist" id="artist"  value = "<?php echo $single->artist; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="rate">Note:
                        </label>
                    </td>
                    <td>
                        <input type="text" name="rate" id="rate"  value = "<?php  echo $single->rate; ?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="release_date">Date de sortie:
                        </label>
                    </td>
                    <td>
                        <input type="date" name="release_date" id="release_date" value="<?php echo $single->release_date;?>" >
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="genre">Genre:
                        </label>
                    </td>
                    <td>
                        <input type="text"  name="genre" id="genre" value=" <?php echo $single->genre;?>">
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="audio">Audio:
                        </label>
                    </td>
                    <td>
                    <audio preload="auto" controls>  <source src="<?php echo $single->audio; ?>"> </audio> </td>
                  <td>  <input type="file" name="audio" id="audio" class="button"/>
                    </td>
                </tr>
                <tr>
                    <td>
                        <label for="artist_image">Image:
                        </label>
                    </td>
                    <td>
                    <img src="<?php echo $single->artist_image;?>" width ="230" height="230" /> </td>
                   <td> <input type="file" name="artist_image" id="artist_image" class="button"/>
                    </td>
                </tr>
                <tr>
                    <td>
                    <br><br>
                        <input type="submit" value="modifier" name = "modifier" class="button" onclick="alert('On est entrain de traiter votre modification.')"> 
                    </td>
                    <td>
                    <input type="hidden" name="old_id" value="<?php echo $single->id;?>">
                    </td>
                    <td>
                    <br><br>
                        <input type="reset" value="Annuler" class="button" >
                    </td>
                </tr>
            </table>
        </form>
		<?php
		
    }

    if(isset($_POST['modifier']))
{
  $img = $_FILES['artist_image']['name'];
  $img_loc = $_FILES['artist_image']['tmp_name'];
  $img_folder = "images";
  move_uploaded_file($img_loc,"$img_folder/$img");
  $audio = $_FILES['audio']['name'];
  $audio_loc = $_FILES['audio']['tmp_name'];
  $audio_folder = "audio";
  move_uploaded_file($audio_loc,"$audio_folder/$audio");
}
function verif_image($single)
{
    if (empty($_FILES["artist_image"]["name"]))
   return $single->artist_image;
   else return 'images/'.$_FILES['artist_image']['name'];

}
function verif_audio($single)
{
    if (empty($_FILES["audio"]["name"]))
   return $single->audio;
   else return 'audio/'.$_FILES['audio']['name'];
}
        if (
            isset($_POST["id"]) &&
        isset($_POST["artist"]) && 
        isset($_POST["single_name"]) && 
        isset($_POST["rate"]) &&  
        isset($_POST["genre"]) &&
        isset($_POST["release_date"])
        ) {
            if (
                !empty($_POST["id"]) && 
                !empty($_POST["single_name"]) &&
                !empty($_POST["release_date"]) &&
                !empty($_POST["genre"]) &&
              //!empty($_FILES["artist_image"]["name"]) &&             artist_image and audio shouldn't be included
              //  !empty($_FILES["audio"]["name"]) &&                  because you should give the option to not modify them
                !empty($_POST["rate"]) 
            ) {
                $single = new Single( 
                    $_POST['id'], 
                    $_POST['artist'],
                    $_POST['single_name'],
                    verif_image($single),
                    verif_audio($single),
                    $_POST['release_date'],
                    $_POST['rate'],
                    $_POST['genre']
                
                );
                $singleC->modifiersingle($single,$_POST['old_id']); 
                echo "<h1>modification faite<h1>";
                
            }
            else
                {
                $error = "Missing information";
                echo "<h1>no can doesville baby doll<h1>";
                 }
    
        }
        
    ?>
		
        <br>
        <br>
        <br>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
    <!-- /.content -->
  </div>
    </section>
   
 

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
