<?php
include "header.php";
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"mouzika");
?>

	
				<?php
                include "left_menu.php";
				?>
				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Features Items</h2>
                        <?php

                        $res=mysqli_query($link," SELECT * FROM product ");
                        while($row=mysqli_fetch_array($res))
                        {

                        ?>

<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
									<div class="productinfo text-center">
										<img src="../../back/view/<?php echo $row ["product_image"]; ?> " alt="" width="362" height="350" />
										<h2>$<?php echo $row["product_pricehigh"]; ?></h2>
										<p><?php echo $row["product_name"];  ?></p>
										<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
									</div>
									<div class="product-overlay">
										<div class="overlay-content">
											<h2>$<?php echo $row["product_pricehigh"]; ?></h2>
											<p><?php echo $row["product_name"];  ?></p>
											<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
									</div>
								</div>
								<div class="choose">
									<ul class="nav nav-pills nav-justified">
										<li><a href=""><i class="fa fa-plus-square"></i>Add to wishlist</a></li>
										<li><a href=""><i class="fa fa-plus-square"></i>Add to compare</a></li>
									</ul>
								</div>
							</div>
						</div>


<?php


                        }

                        ?>






						
						
							
						
						
</div>
						
						<ul class="pagination">
							<li class="active"><a href="">1</a></li>
							<li><a href="">2</a></li>
							<li><a href="">3</a></li>
							<li><a href="">&raquo;</a></li>
						</ul>
					</div><!--features_items-->
				</div>
			</div>
		</div>
	</section>
	
	<?php
    include "footer.php";

    ?>