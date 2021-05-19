<style>
div.ex1 {
  width: 500px;
  margin: auto;
  border: 3px solid #73AD21;
}

.ex2 {
  max-width: 50px;
  max-height: 50px;
  margin: auto;
  border: 3px solid #73AD21;
}
</style>
<?php

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"masterclass");

?>

          <?PHP
	include "../controller/productC.php";

	$productC=new productC();
	$listeproduct=$productC->afficherproducts();

?>

<html>
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title> Show products </title>
    </head>
    <body>
    
		<hr>
		<table class="styled-table">
            <thead>
			<tr class="active-row">
				<th>Id</th>
				<th>Productname</th>
				<th>product_pricelow</th>
				<th>product_pricehigh</th>
				<th>product_qty</th>
				<th>product_image</th>
                <th>product_category</th>
                <th>product_description</th>
                <th>product_brand</th>
				
			</tr>
            </thead>
            <tbody>
            
			
			<?PHP
				foreach($listeproduct as $product){
                   ?>
				<tr>
					<td><?PHP echo $product['id']; ?></td>
					<td><?PHP echo $product['product_name']; ?></td>
					<td><?PHP echo $product['product_pricelow']; ?></td>
					<td><?PHP echo $product['product_pricehigh']; ?></td>
                    <td><?PHP echo $product['product_qty']; ?></td>
					
                    <td  >  
					
                    <img width="100%" height="100"src="../../<?php echo $product['product_image'];?>  " />
					
                    </td>
					
                    <td><?PHP echo $product['product_category']; ?></td>
                    <td><?PHP echo $product['product_description']; ?></td>
                    <td><?PHP echo $product['product_brand']; ?></td>
					<tr>
					<td>
						<form method="POST" action="deleteproduct.php">
						<input class="filsa" type="submit" name="delete" value="Delete">
						<input type="hidden" value=<?PHP echo $product['id']; ?> name="id">
						</form>
						
					</td>
					
					<td >
						<a  href="updateproduct.php?id=<?PHP echo $product['id']; ?>"> Update </a>
					</td>
					</tr>
				</tr>
                </tbody>
			<?PHP
            
				}
			?>
		</table>
	</body>
</html>

