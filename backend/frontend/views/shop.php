<?php

$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"2a8");

if(isset($_POST["submit1"]))
{if(isset($_GET['id']))
    {
    // id dans l'url
    $id = $_GET['id'];
    }
    $d=0;
    $img1=0;
    $nm=0;
    $prize=0;
    $qty=0;
    $total=0;
    
    if(isset($_COOKIE['item']))//this is for cheking cookies available or not
    {
        foreach($_COOKIE['item'] as $name=>$value)
        {
            $d=$d+1;
        }
        $d=$d+1;
    }
    else
    {
        $d=$d+1;
    }
    if(isset($id))
    {
    //to get description from table
    $res3=mysqli_query($link,"SELECT * from product where id='$id'");
}if(isset($res3))

{  
    while($row3=mysqli_fetch_array($res3))
    {
        $img1=$row3["product_image"];
        $nm=$row3["product_name"];
        $prize=$row3["product_pricelow"];
        $qty="1";
        $total=$prize*$qty;
    }
}
if(isset($_COOKIE['item']))
{
    foreach($_COOKIE['item'] as $name1=>$value)
    {
        $values11=explode("__",$value);
        $found=0;
        if($img1==$values11[0])
        {
            $found=$found+1;
            $qty=$values11[3]+1;
            $tb_qty;
            $res3=mysqli_query($link,"SELECT * from product where product_image='$img1 ");
            while($row=mysqli_fetch_array($res))
            {
                $tb_qty=$row["product_qty"];
            }
            if($tb_qty<$qty)
            {
                ?>
                <script type="text/javascript">
                alert("this much quantity  is not available");
                <?php
            }
            else
            {
            $total=$values11[2]*$qty;
            setcookie("item[$d]",$img1."__".$nm."__".$prize."__".$qty."__".$total,time()+1800);//new
        }}
    }
    if($found==0)
    {
        setcookie("item[$d]",$img1."__".$nm."__".$prize."__".$qty."__".$total,time()+1800);//new
    }
    else
    {
        setcookie("item[$d]",$img1."__".$nm."__".$prize."__".$qty."__".$total,time()+1800);//new
    }
}
    
}
include_once "header.php";
?>
  <link href="../pagination/css/pagination.css" rel="stylesheet" type="text/css"/>
    <link href="../pagination/css/A_green.css" rel="stylesheet" type="text/css"/>
    <?PHP
	include "../controller/productC.php";
  

	$productC=new productC();
	$listeproduct=$productC->afficherproducts();

?>
<?php 
include("../pagination/function.php");
$page= (int) (!isset($_GET["page"]) ? 1 : $_GET["page"]);
$limit=10;
$startpoint=($page*$limit)-$limit;
$statement="product";


$res=mysqli_query($link,"select * from {$statement} LIMIT {$startpoint},{$limit} ");
while($row=mysqli_fetch_array($res))
{
    ?>

	<!-- content -->
    <div id="content">

<div class="product-page container">
    
    <div class="row">
        <div class="col-md-6">
            <div class="single-img">
                <div >
                    <img src="../../backend/<?php echo $row['product_image'];?> "width="300" height="300"   />
                    
                </div>
                <div id="test"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="single-desc">
                <div class="top-single">
                    <span>Shop </span>
                    <div class="right-arrows">
                        <a href="#"><i class="fa fa-angle-left"></i></a>
                        <a href="#"><i class="fa fa-angle-right"></i></a>
                    </div>
                    <div class="clear"></div>
                </div>

                <div class="middle-single">
                    
                    <h1><?php echo $row["product_name"];?></h1>

                    

                    <div class="reviews">
                        <a href="#">21 Rewiew(s)</a>  /  
                        <a href="#">Add a Review</a>
                    </div>
                    <div class="clear"></div>

                </div>
                                    
                <div class="single-price">
                   <ul>
                        <li><span class="high-price">$<?php echo $row['product_pricehigh'];?></span></li>
                        <li><span class="low-price">$<?php echo $row['product_pricelow'];?></span></li>
                    </ul>
                </div>

                <div class="single-infos">
                    <p><span>Brand:</span> <?php echo $row['product_brand'];?></p>
                    <p><span>Product Code:</span> <?php echo $row['id'];?> </p>
                    
                </div>

               
            <form name="form1" action="" method="post">
                    
                <div class="prod-end">
                    <button type="submit" name="submit1" class="btn btn-default cart">
                    <i class="fa fa-shopping-cart"></i>
                    Add to cart
                    
                    </button>
                    <input type="text" placeholder="1">
                    <ul>
                        <li><a href="#" class="wishlist"><i class="fa fa-heart"></i> Add to Wishlist</a></li>
                        <li><a href="#" class="compare"><i class="fa fa-retweet"></i>Add to Compare</a></li>
                    </ul>
                    <div class="clear"></div>
                                                            
                </div>
            </form>

                <div class="single-descript">
                <p> <?php echo $row['product_description'];?></p>
                </div>

                <div class="share">
                    <span>Share</span>
                    <tr>
                    <td>
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        </td>
                        <td>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        </td>
                        
                        <td><a href="#"><i class="fa fa-google-plus"></i></a></td>
                        <td><a href="#"><i class="fa fa-pinterest"></i></a></td>
                        <td> <a href="#"><i class="fa fa-instagram"></i></a></td>
                        <td> <a href="#"><i class="fa fa-envelope"></i></a></td>
                        </tr>
                   
                </div>

            </div>
        </div>
    </div>

</div>
<!-- End Product Single -->

    <?php  
}
?>
	

			<div class="tabs-single">
				<div class="container">

					<div id="tabs">
					  <ul>
					    <li class="active"><a href="#tabs-1">Description</a></li>
					    <li><a href="#tabs-2">ADDITIONAL INFORMATION</a></li>
					    <li><a href="#tabs-3">REVIEWS</a></li>
					  </ul>
					  <div class="tab-border"></div>
					  <div id="tabs-1">
					    <p>We possess within us two minds. So far I have written only of the conscious mind.. Our subconscious mind contains such power and complexity that it literally staggers the imagination. We know that this subconscious mind controls and orchestrates our bodily functions, from pumping blood to all parts of our body. We possess within us two minds. So far I have written only of the conscious mind.. Our subconscious mind contains such power and complexity that it literally staggers the imagination. We know that this subconscious mind controls and orchestrates our bodily functions, from pumping blood to all parts of our body.</p>
					  </div>
					  <div id="tabs-2">
					    <p>We possess within us two minds. So far I have written only of the conscious mind.. Our subconscious mind contains such power and complexity that it literally staggers the imagination. We know that this subconscious mind controls and orchestrates our bodily functions, from pumping blood to all parts of our body. We possess within us two minds. So far I have written only of the conscious mind.. Our subconscious mind contains such power and complexity that it literally staggers the imagination. We know that this subconscious mind controls and orchestrates our bodily functions, from pumping blood to all parts of our body.</p>
					  </div>
					  <div id="tabs-3">
					  <p><strong>John doe</strong></p>
					    <p>Great Product, i give it a 4 star review.</p>
					    
					  </div>
					</div>
					<!-- End First Tabs -->
                <ul class="pagination">
                <?php
               echo pagination($statement,$limit,$page);
               ?>
                </ul>


				</div>
			</div>		
			<!-- End tab Signle -->	

<?php
include_once "footer.php";
?>