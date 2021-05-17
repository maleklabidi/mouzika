

<?php
include_once "../login/session.php";


include "header.php";

    ?>
    <?php
    include "../login/config.php";
    ?>
        
        <div class="grid_10">
            
            <div class="box round first">
                <h2>Update product</h2>
                    <div class="block">
                        <form name="form1" action="" method="POST" enctype="multipart/form-data">
                        <table class="styled-table">
                            <tr class="active-row">
                                <td> Product Name</td>
                                <td> <input type="text" name="pnm"></td>
                            </tr>
                            <tr class="active-row">
                                <td> Product Brand</td>
                                <td> <input type="text" name="pbrand"></td>
                            </tr>
                            <tr class="active-row">
                                <td> Product price(Low)</td>
                                <td> <input type="text" name="ppricelow"></td>
                            </tr>
                            <tr class="active-row">
                                <td> Product price(High)</td>
                                <td> <input type="text" name="ppricehigh"></td>
                            </tr>
                            
                            <tr class="active-row">
                                <td> Product Quantity</td>
                                <td> <input type="text" name="pqty"></td>
                            </tr>
                            <tr class="active-row">
                                <td> Product Image</td>
                                <td>
                                <div>
                                    <label for="files" class="btn ">Select Image</label>
                                    <input id="files" style="visibility:hidden;" type="file" name="pimage">
                                </div>
                                </td>
                            </tr>
                            <tr class="active-row">
                                <td> Product Category</td>
                                <td> 
                                    <select name="pcategory" >
                                    <option value=" Men Clothes"> Men Clothes</option>
                                    <option value=" Women Clothes"> Women Clothes</option>
                                    <option value=" Men Shoes"> Men Shoes</option>
                                    <option value=" Women Shoes"> Women Shoes</option>
                                    </select>
                                    </td>
                            </tr>
                            <tr class="active-row">
                                <td> Product Description</td>
                                <td> 
                                   <textarea name="pdesc" cosl="15" rows="10"></textarea>
                                    </td>
                            </tr>
                            <tr>
                            <div>
                            <td colspan="2" align="center">
                                    <label for="Update" class="btn ">Update</label>
                                    <input id="Update" style="visibility:hidden;" type="submit" name="update">
                                </div>
                                </td>
                            <!-- <strong> <td colspan="2" align="center"><input type="submit" name="submit1" value="Upload" class="filsa"></td></strong>-->
                            </tr>

                        </table>
                        
                        <?php


                            if(isset($_POST["update"]))
                            {
                                $v1=rand(1111,9999);
                                $v2=rand(1111,9999);
                                $v3=$v1.$v2;
                                $v3=md5($v3);
                                $fnm=$_FILES["pimage"]["name"];
                                $dst="../product_image/".$v3.$fnm;
                                $dst1="product_image/".$v3.$fnm;
                                move_uploaded_file($_FILES["pimage"]["tmp_name"],$dst);
                               $query1=mysqli_query($link,"UPDATE INTO product VALUES(NULL,'$_POST[pnm]',$_POST[ppricelow],$_POST[pqty],'$dst1','$_POST[pcategory]','$_POST[pdesc]',$_POST[ppricehigh],'$_POST[pbrand]')");
                              
                                if($query1)
                                {echo"success";}
                                else{echo "failure";}
                            }
                        ?>
                        </form>
                    </div>
                </div>
                </div>
            
       
        <?php
        include "footer.php";
?>
