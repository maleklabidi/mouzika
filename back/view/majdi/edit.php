<?php
include "index3 - Copy.php";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"masterclass");
if(isset($_GET["id"]))
{$id=$_GET["id"];}
$res=mysqli_query($link,"SELECT *FROM cours WHERE id='$id'");
while ($row=mysqli_fetch_array($res))
{
    $nom_cours=$row["nom_cours"];
    $type_cours=$row["type_cours"];
    $prix_cours=$row["prix_cours"];
    $description_cours=$row["description_cours"];
    $photo_cours=$row["photo_cours"];
}

?>

<div class="grid_10">
    <div class="box round first">
        <h2>Edit Item </h2>
        <div class="block">
        <table border="1">
            <tr>
                <td colspan="2" align="center"> 
                    <img src="<?php echo  $photo_cours; ?>" height="100" width="100">


            </tr>
          <tr>
          <td>nom cours </td>
          <td><input type="text" name="nomcours"></td>
          </tr>
          <tr>
          <td>type cours </td>
          <td>

          <input type="text" name="typecours">
          
          </td>
          </tr>
          <tr>
          <td>prix cours </td>
          <td><input type="text" name="prixcours"></td>
          </tr>
          <tr>
          <td>description cours </td>
          <td><input type="text" name="descours"></td>
          </tr>
          <tr>
          <td>photo cours </td>
          <td><input type="file" name="photocours"></td>
          </tr>
          <tr>
          <td colspan="2" align="center"><input type="submit" name="submit1" value="upload"></td>
          </tr>
          </table>
          </form>