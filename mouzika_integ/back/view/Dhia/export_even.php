<?PHP
include_once "../loginadmin/session.php";
include "../../controller/evenementC.php";

  $evenementC=new evenementC();
  $listeevenement=$evenementC->afficherevenement(); 

?>

<!doctype html>
<html lang="en">

<head>
<title>evenement</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.5/css/buttons.dataTables.min.css">
  <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
</head>
    <body>


   <br>
   <hr>
<div class="container"> 


    <table id="mauexport" class="table table-bordered" width=100% collaspacing="0" >
        </div>
        </div>
       </div>
  <thead>

    <tr>
      <th scope="col">id_even</th>
      <th scope="col">nom</th>
      <th scope="col">emplacement</th>
      <th scope="col">capacite</th>
      <th scope="col">date</th>
      <th scope="col">artiste</th>
      <th scope="col">image</th>
   
    </tr>
  </thead>
  <tbody>   <?php
    $listeevenement=$evenementC->afficherevenement(); 
                                   
                                        foreach($listeevenement as $row){
                                        ?>

                                        <tr>
                                            <td><?php echo $row['id_even']; ?></td>
                                            <td><?php echo $row['nom']; ?></td>
                                            <td><?php echo $row['emplacement']; ?></td>
                                            <td><?php echo $row['capacite']; ?></td>
                                            <td><?php echo $row['date']; ?></td>
                                            <td><?php echo $row['artiste']; ?></td>
                                            <td><?php ?> <img src="<?php echo $row["image"]; ?>"height = "100" width ="100"> <?php ?></td>
                               
                                      </tr>
                                <?php
                                }
                                ?>
                                    </tbody>
                                </table>

    

           
        


                                <script>
$(document).ready(function() {
    $('#mauexport').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy','csv','excel', 'pdf', 'print'
        ]
    } );
} );

</script>

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/dataTables.buttons.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.flash.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.53/vfs_fonts.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.html5.min.js"></script>
<script src="https://cdn.datatables.net/buttons/1.6.5/js/buttons.print.min.js"></script>

  </body>
  </html>