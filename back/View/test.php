<?php
if (
!empty($_POST["id"]) && 
!empty($_POST["artist"]) &&
!empty($_POST["single_name"]) &&
!empty($_POST["release_date"]) &&
!empty($_POST["genre"]) &&
!empty($_FILES["artist_image"]["name"]) &&
!empty($_FILES["audio"]["name"]) &&
!empty($_POST["rate"])
)
{
echo  $_FILES['artist_image']['name'];
echo "<br>";
echo  $_FILES['audio']['name'];
}
else 
{ echo "not intersepting";
    if (empty($_POST["id"]) ) echo "id is the problem";
    else if (empty($_POST["artist"])) echo "artist is the problem";
    else if (empty($_POST["single_name"])) echo "single_name is the prob";
    else if (empty($_POST["release_date"])) echo "date is the prob";
    else if (empty($_POST["genre"])) echo "genre is prob";
    else if (empty($_FILES["artist_image"]["name"])) echo "image is prob";
    else if (empty($_FILES["audio"]["name"])) echo "audio is prob";
    else if (empty($_POST["rate"])) echo "rate is prob";
    else echo "none of these";
 }


?>