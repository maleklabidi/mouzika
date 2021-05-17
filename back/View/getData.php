<?php 
 
    include_once '../Controller/albumsC.php'; 
 
    $db = config::getConnexion();
 
    $search=$_POST['search']; 

    // echo "<script>alert('Debug" . $search . "' );</script>";

    $sql="SELECT * from albums 
    WHERE title LIKE '%$search%' 
    OR genre LIKE '%$search%' 
    OR artist LIKE '%$search%'";
 
    $query=$db->prepare($sql); 
    $query->execute();  
    $data=$query->fetchAll(PDO::FETCH_ASSOC);

    
    if(isset($data['0'])){
      $html='
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
      </thead>';
        
      foreach($data as $d){
        $html.='
        <tr>
          <td>'.$d["id"].'</td>
          <td>'.$d["artist"].'</td>                     
          <td>'.$d["title"].'</td>
          <td>'.$d["genre"].'</td>
          <td>'.$d["number_of_songs"].'</td>

          <td>'.$d["length"].'</td>
          <td>'.$d["release_date"].'</td>
          
          <td>
            <img src="'.$d["cover_image"].'" height ="100" width="100">   
          </td>
    
        </tr>';
      }    
      echo $html;                
    }
    
    else{echo "data not found";}

?>
