<?PHP
include '../Controller/albumsC.php'; 


	$albumC=new albumsC();
	$listealbum=$albumC->afficheralbum(); 
  $db = config::getConnexion();
 
  
  $start = 0; 
  $per_page=4;  // kadeh men commission par page todhher
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
 
  $sql = "SELECT * FROM albums limit $start, $per_page";
  $query=$db->prepare($sql); 
  $query->execute();  
  
  if($query->rowCount() > 0){ //ken table  moch fergha 
      $result = $query->fetchAll(PDO::FETCH_ASSOC);
  }
  
 
 
  $count=$listealbum->rowCount(); 
   //arrondissement
   $paginations=ceil($count/$per_page); // $pagination heya kadeh men link taa pagination bech ikoun fama 
   //ceil fonction taa arrondissement

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Mouzika | Dashboard </title>

<!-- CSS for metier pagination -->
   <link rel="stylesheet" href="pagination.css">
   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
   <!-- jsGrid -->
   <link rel="stylesheet" href="plugins/jsgrid/jsgrid.min.css">
   <link rel="stylesheet" href="plugins/jsgrid/jsgrid-theme.min.css">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- IonIcons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<!--
`body` tag options:
  Apply one or more of the following classes to to the body tag
  to get the desired effect
  * sidebar-collapse
  * sidebar-mini
-->
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
        <a href="index3.html" class="nav-link">Home</a>
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
            <input type="text" name="search" id="search" class="form-control float-right" placeholder="Search" onkeyup="search_data()">

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
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Connecté en tant qu'
          </br>
              admin.
          </a>
        </div>
      </div>
 <!-- SidebarSearch Form -->
 
<!-- 
  ***********************************************************************************************************************************
  ***********************************************************************************************************************************
  *********************************************************INTEGRATION HERE**********************************************************
  ***********************************************************************************************************************************
  ***********************************************************************************************************************************
-->
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
        
          <!-- MY CHANGES ATM -->
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
  <div class="content-wrapper" style="min-height: 2077.69px;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Gérer les albums:</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    
    <section class="content">
      <div class="container-fluid">
    <div class="row">
          <div class="col-12">
          <button class="button" onclick="location.href='ajouteralbum_web.php'">Ajouter un album</button>
          <form>
          <input type="radio" id="asc" name="asc" value="asc">
            <label for="asc">Ordre croissant</label><br>
            <input type="radio" id="dsc" name="dsc" value="dsc">
            <label for="dsc">Ordre décroissant</label><br>
            <input type="submit" value="Trier la liste" class="button" onclick="trier()"><br>
          </form>
        <hr>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Voici la liste de nos albums:</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="search" class="form-control float-right" placeholder="Search" onkeyup="search_data()">

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
                <table name="table_search" class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>ID album</th>
                      <th>Artiste</th>
                      <th>Titre</th>
                      <th>Genre</th>
                      <th>Nombre de chansons</th>
                      <th>Durée</th>
                      <th>Date de sortie</th>
                      <th>Image</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?PHP
				foreach($result as $album){
			?>
				<tr>
					 <td><?PHP echo $album['id']; ?></td>
					<td><?PHP echo $album['artist']; ?></td>
					<td><?PHP echo $album['title']; ?></td>
					<td><?PHP echo $album['genre']; ?></td>
					<td><?PHP echo $album['number_of_songs']; ?></td>
          <td><?PHP echo $album['length']; ?></td>
          <td><?PHP echo $album['release_date']; ?></td>
          <?php
          echo "<td>";?> <img src="<?php echo $album["cover_image"]; ?>"height = "100" width ="100"> <?php echo "</td>";
          ?>
                    
				
			      
				<td>
						<form method="POST" action="supprimeralbum_web.php">
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
						<input type="submit" name="supprimer" value="supprimer" class="button">
						<input type="hidden" value=<?PHP echo $album['id']; ?> name="id">
						</form>
					</td>
					<td>
						<button onclick="location.href='modifieralbum_web.php?id=<?PHP echo $album['id']; ?>'" type="button" class="button"> Modifier </button>
					</td>
				</tr> 
			<?PHP
				}
			?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
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
            <!-- /.card -->
          </div>
        </div>
    <!-- /.content -->
    <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>

 
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="dist/js/adminlte.js"></script>
<!-- jsGrid -->
<script src="plugins/jsgrid/demos/db.js"></script>
<script src="plugins/jsgrid/jsgrid.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="dist/js/pages/dashboard3.js"></script>
<script>
  $(function () {
    $("#jsGrid1").jsGrid({
        height: "100%",
        width: "100%",

        sorting: true,
        paging: true,

        data: db.clients,

        fields: [
            { name: "Name", type: "text", width: 150 },
            { name: "Age", type: "number", width: 50 },
            { name: "Address", type: "text", width: 200 },
            { name: "Country", type: "select", items: db.countries, valueField: "Id", textField: "Name" },
            { name: "Married", type: "checkbox", title: "Is Married" }
        ]
    });
  });
</script>
</body>
</html>
<script>
          function search_data()
          {
            var search=jQuery('#search').val();
            if(search!=''){
              jQuery.ajax({
              type: 'POST', 
              url:'getData.php',
              data:'search='+search, 
              success:function(data){
              jQuery('#table_search').html(data);
               
              }
 
              })
            }
 
          }
 
      </script>
