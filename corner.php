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
                <h1>Welcome to our CAREER SECTION</h1>
                <p>We have the ALL THE UPDATED INFORMATION RELATED TO YOUR CAREER RELATED QUERIES.</p>
                
            </div>
        </div>
           <div class="row">
                <div class="col-sm-6 col-md-3">
                    <a href="products.php#ca" ><div class="thumbnail">
                            <img src="img/1.jpg" alt="" class="tempTesting">
                            <center>
                            <div class="caption">
                                <h3>ENGINEERING</h3>
                                <P>JOB , GUIDANCE , TOP-COLLEGES</p>
                               
    <a href="engineering.php" name="add" value="add" class="btn btn-block btn-primary">explore</a>
                            

                                
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
                                <h3>medical</h3>
                                <p></p>
                                                              
    <a href="medical.php" name="add" value="add" class="btn btn-block btn-primary">explore</a>

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
                                <h3>UPSC</h3>
                                <p></p>
                                                               
    <a href="upsc.php" name="add" value="add" class="btn btn-block btn-primary">EXPLORE</a>

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
                                <h3>CIVIL SERVICES (others)</h3>
                                <p></p>
                                                              
    <a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">explore</a>
    


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
                                <h3>SCIENCE STREAM </h3>
                                <p></p>
                                                               
    <a href="science.php" name="add" value="add" class="btn btn-block btn-primary">explore</a>

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
                                <h3>ARTS AND MISCELLANEOUS</h3>
                               
                                                              
    <a href="arts.php" name="add" value="add" class="btn btn-block btn-primary">explore</a>
   

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
                                <h3>Study tips</h3>
                                <p></p>
                                                              
    <a href="tips.php" name="add" value="add" class="btn btn-block btn-primary">explore</a>
   

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
                                <h3>Donate!!</h3>
                                
     

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