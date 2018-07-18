<?php
include "common.php";

?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="index.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Navbar in Bootstrap</title>
    </head>
    <body>
        
        <?php
        include 'header.php';
      
        ?>
        
        <?php
        include 'Check-if-added.php';
      
        ?>

        <div class="container">

            <div class="jumbotron">
                <h1>STARTERS</h1>
                <p></p>
                
            </div>
        </div>
           <div class="row">
                <div class="col-sm-6 col-md-3">
                    <a href="products.php#ca" ><div class="thumbnail">
                            <img src="img/1.jpg" alt="" class="tempTesting">
                            <center>
                            <div class="caption">
                                <h3>canon eos</h3>
                                <p>Price RS 30000</p>
                                                                                            <?php if (!isset($_SESSION['email'])) { ?>
    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php
    } else {
    //We have created a function to check whether this particular product is addedto cart or not.
    if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart !=0)
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
	echo '<a href="cart-rem.php?id=1" name="add" value="add" class="btn btn-block btn-danger">remove</a>';
    } else {
    ?>
    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
}
}
?>

                                
                            </div>
                            </center>
                        </div> 
                    </a>
                </div>
               <div class="col-sm-6 col-md-3">
                    <a href="" ><div class="thumbnail">
                            <img src="img/6.jpg" alt="">
                            <center>
                            <div class="caption">
                                <h3>nikon dslr</h3>
                                <p> price. Rs 40000</p>
                                                               <?php if (!isset($_SESSION['email'])) { ?>
    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php
    } else {
    //We have created a function to check whether this particular product is addedto cart or not.
    if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart !=0)
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
	echo '<a href="cart-rem.php?id=2" name="add" value="add" class="btn btn-block btn-danger">remove</a>';
    } else {
    ?>
    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
}
}
?>
                            </div>
                            </center>
                        </div> 
                    </a>
                </div>

                <div class="col-sm-6 col-md-3">
                    <a href="products.php#shirts" ><div class="thumbnail">
                            <img src="img/1.jpg" alt="">
                            <center>
                            <div class="caption">
                                <h3>sony dslr</h3>
                                <p>Price Rs.40000</p>
                                                               <?php if (!isset($_SESSION['email'])) { ?>
    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php
    } else {
    //We have created a function to check whether this particular product is addedto cart or not.
    if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart !=0)
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
echo '<a href="cart-rem.php?id=3" name="add" value="add" class="btn btn-block btn-danger">remove</a>';
    } else {
    ?>
    <a href="cart-add.php?id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
}
}
?>
                            </div>
                            </center>
                        </div>
                    </a>
                </div>
               <div class="col-sm-6 col-md-3">
                    <a href="products.php#watches" ><div class="thumbnail">
                            <img src="img/6.jpg" alt="">
                            <center>
                            <div class="caption">
                                <h3>olympus dslr</h3>
                                <p>Price RS.50000</p>
                                                               <?php if (!isset($_SESSION['email'])) { ?>
    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php
    } else {
    //We have created a function to check whether this particular product is addedto cart or not.
    if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart !=0)
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
	echo '<a href="cart-rem.php?id=2" name="add" value="add" class="btn btn-block btn-danger">remove</a>';
    } else {
    ?>
    <a href="cart-add.php?id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
}
}
?>
                            </div>
                            </center>
                        </div> 
                    </a>
                </div>
            </div>
           <div class="row">
                <div class="col-sm-6 col-md-3">
                    <a href="products.php#cameras" ><div class="thumbnail">
                            <img src="img/2.jpg" alt="">
                            <center>
                            <div class="caption">
                                <h3>titan model#301
 </h3>
                                <p>Price Rs. 13000</p>
                                                               <?php if (!isset($_SESSION['email'])) { ?>
    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php
    } else {
    //We have created a function to check whether this particular product is addedto cart or not.
    if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart !=0)
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
	echo '<a href="cart-rem.php?id=5" name="add" value="add" class="btn btn-block btn-danger">remove</a>';
    } else {
    ?>
    <a href="cart-add.php?id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
}
}
?>
                            </div>
                            </center>
                        </div> 
                    </a>
                </div>
               <div class="col-sm-6 col-md-3">
                    <a href="products.php#watches" ><div class="thumbnail">
                            <img src="img/18.jpg" alt="">
                            <center>
                            <div class="caption">
                                <h3>titan model #201
</h3>
                                <p>Price RS. 3000</p>
                                                               <?php if (!isset($_SESSION['email'])) { ?>
    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php
    } else {
    //We have created a function to check whether this particular product is addedto cart or not.
    if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart !=0)
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
	echo '<a href="cart-rem.php?id=6" name="add" value="add" class="btn btn-block btn-danger">remove</a>';
    } else {
    ?>
    <a href="cart-add.php?id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
}
}
?>
                            </div>
                            </center>
                        </div> 
                    </a>
                </div>

                <div class="col-sm-6 col-md-3">
                    <a href="products.php#shirts" ><div class="thumbnail">
                            <img src="img/19.jpg" alt="">
                            <center>
                            <div class="caption">
                                <h3>HMT milan</h3>
                                <p>price Rs.8000</p>
                                                              <?php if (!isset($_SESSION['email'])) { ?>
    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php
    } else {
    //We have created a function to check whether this particular product is addedto cart or not.
    if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart !=0)
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
	echo '<a href="cart-rem.php?id=7" name="add" value="add" class="btn btn-block btn-danger">remove</a>';
    } else {
    ?>
    <a href="cart-add.php?id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
}
}
?>
                            </div>
                                </center>
                        </div>
                    </a>
                </div>
               <div class="col-sm-6 col-md-3">
                    <a href="products.php#watches" ><div class="thumbnail">
                            <img src="img/20.jpg" alt="">
                            <center>
                            <div class="caption">
                                <h3>Faber luba #111</h3>
                                <p>Price RS. 8000</p>
                                                                 <?php if (!isset($_SESSION['email'])) { ?>
    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php
    } else {
    //We have created a function to check whether this particular product is addedto cart or not.
    if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart !=0)
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
	echo '<a href="cart-rem.php?id=8" name="add" value="add" class="btn btn-block btn-danger">remove</a>';
    } else {
    ?>
    <a href="cart-add.php?id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
}
}
?>
                            
                            </div>
                            </center>
                        </div> 
                    </a>
                </div>
            </div>
           <div class="row">
                <div class="col-sm-6 col-md-3">
                    <a href="products.php#cameras" ><div class="thumbnail">
                            <img src="img/13.jpg" alt="">
                            <center>
                            <div class="caption">
                                <h3> H&W</h3>
                                <p>Price RS. 1300</p>
                                                               <?php if (!isset($_SESSION['email'])) { ?>
    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php
    } else {
    //We have created a function to check whether this particular product is addedto cart or not.
    if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart !=0)
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
echo '<a href="cart-rem.php?id=9" name="add" value="add" class="btn btn-block btn-danger">remove</a>';
    } else {
    ?>
    <a href="cart-add.php?id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
}
}
?>
                              
                            </div>
                            </center>
                        </div> 
                    </a>
                </div>
			
		</div>

			<div class="row">
               <div class="col-sm-6 col-md-3">
                    <a href="products.php#watches" ><div class="thumbnail">
                            <img src="img/22.jpg" alt="">
                            <center>
                            <div class="caption">
                                <h3> luis philips</h3>
                                <p>Price RS.800</p>
                                                               <?php if (!isset($_SESSION['email'])) { ?>
    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php
    } else {
    //We have created a function to check whether this particular product is addedto cart or not.
    if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart !=0)
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
echo '<a href="cart-rem.php?id=10" name="add" value="add" class="btn btn-block btn-danger">remove</a>';
    } else {
    ?>
    <a href="cart-add.php?id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
}
}
?>
                            </div>
                            </center>
                        </div> 
                    </a>
                </div>

                <div class="col-sm-6 col-md-3">
                    <a href="products.php#shirts" ><div class="thumbnail">
                            <img src="img/23.jpg" alt="">
                            <center>
                            <div class="caption">
                                <h3>ohn zok</h3>
                                <p>Price RS 1500</p>
                                                              <?php if (!isset($_SESSION['email'])) { ?>
    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php
    } else {
    //We have created a function to check whether this particular product is addedto cart or not.
    if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart !=0)
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
	echo '<a href="cart-rem.php?id=11" name="add" value="add" class="btn btn-block btn-danger">remove</a>';
    } else {
    ?>
    <a href="cart-add.php?id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
}
}
?>
                            </div>
                            </center>
                        </div>
                    </a>
                </div>
               <div class="col-sm-6 col-md-3">
                    <a href="products.php#watches" ><div class="thumbnail">
                            <img src="img/24.jpg" alt="">
                            <center>
                            <div class="caption">
                                <h3>jhalsani</h3>
                                <p>Price RS.1900</p>
                                                              <?php if (!isset($_SESSION['email'])) { ?>
    <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
    <?php
    } else {
    //We have created a function to check whether this particular product is addedto cart or not.
    if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart !=0)
    echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
	echo '<a href="cart-rem.php?id=12" name="add" value="add" class="btn btn-block btn-danger">remove</a>';
    } else {
    ?>
    <a href="cart-add.php?id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
    <?php
}
}
?>
                            </div>
                            </center>
                        </div> 
                    </a>
                </div>


</div>
			
				

	
        <footer >
            <p>Copyright © Lifestyle Store. All Rights
                Reserved” ​and ​“Contact Us: +91 90000 00000</p>
        </footer>
    </body>
</html>