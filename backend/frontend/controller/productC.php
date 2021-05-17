<?PHP
	include "config.php";
	require_once '../Model/product.php';

	class productC {
		
		function ajouterproduct($product){
			$sql="INSERT INTO product (product_name,product_pricelow,product_qty,product_image,product_category,product_description,product_pricehigh,product_brand) 
			VALUES (:product_name,:product_pricelow,:product_qty,:product_image,:product_category,:product_description,:product_pricehigh,:product_brand)";
			$db = config::getConnexion();
			try{
				$query = $db->prepare($sql);
			
				$query->execute([
					'product_name' => $product->getProductName(),
					'product_pricelow' => $product->getProductPriceLow(),
					'product_qty' => $product->getProductQty(),
                    'product_image' => $product->getProductImage(),
                    'product_category' => $product->getProductCategory(),
                    'product_description' => $product->getProductDescription(),
                    'product_pricehigh' => $product->getProductPriceHigh(),
                    'product_brand' => $product->getProductBrand()
				]);			
			}
			catch (Exception $e){
				echo 'Erreur: '.$e->getMessage();
			}			
		}
		
		function afficherproducts(){
			
			$sql="SELECT * FROM product";
			$db = config::getConnexion();
			try{
				$liste = $db->query($sql);
				return $liste;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}	
		}

		function deleteproduct($id){
			$sql="DELETE FROM product WHERE id= :id";
			$db = config::getConnexion();
			$req=$db->prepare($sql);
			$req->bindValue(':id',$id);
			try{
				$req->execute();
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage()); 
			}
		}
		function updateproduct($product, $id){
			try {
				$db = config::getConnexion();
				$query = $db->prepare(
					'UPDATE product SET 
						product_name = :product_name, 
						product_pricelow = :product_pricelow,
                        product_qty = :product_qty,
                        product_image = :product_image,
                        product_category = :product_category,
                        product_description = :product_description,
                        product_pricehigh = :product_pricehigh,
                        product_brand = :product_brand
                        
						
					WHERE id = :id'
				);
				$query->execute([
					'product_name' => $product->getProductName(),
					'product_pricelow' => $product->getProductPriceLow(),
					'product_qty' => $product->getProductQty(),
                    'product_image' => $product->getProductImage(),
                    'product_category' => $product->getProductCategory(),
                    'product_description' => $product->getProductDescription(),
                    'product_pricehigh' => $product->getProductPriceHigh(),
                    'product_brand' => $product->getProductBrand(),
					'id' => $id
				]);
				//echo $query->rowCount() . " records UPDATED successfully <br>";
			} catch (PDOException $e) {
				$e->getMessage();
			}
		}
		function recupererproduct($id){
			$sql="SELECT * from product where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();

				$user=$query->fetch();
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}

		function recupererproduct1($id){
			$sql="SELECT * from product where id=$id";
			$db = config::getConnexion();
			try{
				$query=$db->prepare($sql);
				$query->execute();
				
				$user = $query->fetch(PDO::FETCH_OBJ);
				return $user;
			}
			catch (Exception $e){
				die('Erreur: '.$e->getMessage());
			}
		}
		
	}

?>