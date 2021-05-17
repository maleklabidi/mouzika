<?php
include_once "../login/session.php";
include_once "../login/config.php"

?>
<?php
	include "../controller/productC.php";
	include_once '../Model/product.php';

	$productC = new productC();
	$error = "";
	
	if (
		isset($_POST["prodcut_name"]) && 
        isset($_POST["prodcut_pricelow"]) && 
        isset($_POST["prodcut_qty"])&&
        isset($_POST["prodcut_image"])&&
        isset($_POST["prodcut_category"])&&
        isset($_POST["prodcut_description"])&&
        isset($_POST["prodcut_pricehigh"])&&
        isset($_POST["prodcut_brand"])
	){
		if (
            
            !empty($_POST["prodcut_name"]) && 
            !empty($_POST["prodcut_pricelow"]) && 
            !empty($_POST["prodcut_qty"])&&
            !empty($_POST["prodcut_image"])&&
            !empty($_POST["prodcut_category"])&&
            !empty($_POST["prodcut_description"])&&
            !empty($_POST["prodcut_pricehigh"])&&
            !empty($_POST["prodcut_brand"])
        ) {
            $products = new product(
                
                $_POST["prodcut_name"],
                $_POST["prodcut_pricelow"],  
                $_POST["prodcut_qty"],
                $_POST["prodcut_image"],
                $_POST["prodcut_category"],
                $_POST["prodcut_description"],
                $_POST["prodcut_pricehigh"],
                $_POST["prodcut_brand"]
			);
			
            $productC->updateproduct($products, $_GET['id']);
            header('refresh:5;url=showproduct.php');
        }
        else
            $error = "Missing information";
	}

?>
<?php
include_once "header.php";
?>


<html>
	<head>
        <style>
            a{
                text-decoration:none;
                color:black;
            }
        </style>
		<title>update product</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	</head>
	<body>
		
        <hr>
        
        <div id="error">
            <?php echo $error; ?>
        </div>
		
		<?php
			if (isset($_GET['id'])){
				$products = $productC->recupererproduct($_GET['id']);
				
		?>
		<form action="" method="POST" enctype="multipart/form-data">
            <table align="center" class="styled-table">
                <tr class="active-row">
                    
                    <td>
                        <label for="id">Id:
                        </label>
                    </td>
                    <td>
						<input type="text" name="id" id="id"  value = "<?php echo $products['id']; ?>" disabled>
					</td>
				</tr>
				<tr class="active-row">
					<td>
						<label for="product_name">product_name:
						</label>
					</td>
					<td>
						<input type="text" name="product_name" id="product_name"  value = "<?php echo $products['product_name']; ?>">
					</td>
				</tr>
                
                
                <tr class="active-row">
					<td>
						<label for="product_pricelow">product_pricelow:
						</label>
					</td>
					<td>
						<input type="text" name="product_pricelow" id="product_pricelow"  value = "<?php echo $products['product_pricelow']; ?>">
					</td>
				</tr>
                <tr class="active-row">
					<td>
						<label for="product_pricehigh">product_pricehigh:
						</label>
					</td>
					<td>
						<input type="text" name="product_pricehigh" id="product_pricehigh"  value = "<?php echo $products['product_pricehigh']; ?>">
					</td>
				</tr>
                <tr class="active-row">
					<td>
						<label for="product_qty">product_qty:
						</label>
					</td>
					<td>
						<input type="text" name="product_qty" id="product_qty"  value = "<?php echo $products['product_qty']; ?>">
					</td>
				</tr>
                <tr class="active-row">
                                <td> Product Image</td>
                                <td>
                                <div>
                                    <label for="files" class="btn ">Select Image</label>
                                    <input id="files" style="visibility:hidden;" type="file" name="product_image">
                                </div>
                                </td>
                            </tr>
                            <tr class="active-row">
                                <td> 
                                <label for="product_category">product_category:
						</label>
                                </td>
                                <td> 
                                    <select name="product_category" id="product_category"  value = "<?php echo $products['product_category']; ?>">
                                    <option value=" Men Clothes"> Men Clothes</option>
                                    <option value=" Women Clothes"> Women Clothes</option>
                                    <option value=" Men Shoes"> Men Shoes</option>
                                    <option value=" Women Shoes"> Women Shoes</option>
                                    </select>
                                    </td>
                            </tr>
                
               
                <tr class="active-row">
					<td>
						<label for="product_description">product_description:
						</label>
					</td>
					<td>
						<input type="text" name="product_description" id="product_description" value = "<?php echo $products['product_description']; ?>">
					</td>
				</tr>
               
                <tr class="active-row">
					<td>
						<label for="product_brand">product_brand:
						</label>
					</td>
					<td>
						<input type="text" name="product_brand" id="product_brand"  value = "<?php echo $products['product_brand']; ?>">
					</td>
				</tr>
                
                
                
                
                
                
                <tr class="active-row">
                    <td></td>
                    <td>
                        <input class="btn" type="submit" value="Update" name ="update"> 
                    </td>
                    <td>
                    <button class="btn"><a  href="showproduct.php">Cancel</a></button>
                    </td>
                </tr>

            </table>

                              

        </form>
		<?php
		}
		?>
	</body>
</html>

       <?php
       include_once "footer.php";
       ?>