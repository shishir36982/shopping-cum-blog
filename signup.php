<?php
include "common.php";
if (isset($_SESSION['email'])) {
header('location: products.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >

        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="index.css" rel="stylesheet" type="text/css"/>
        <style>
            .row_style{
                margin-top:10px;
            }
        </style>
        <title>N</title>
    </head>
    <body>
        <?php
        include 'header.php';
        ?>
        <div id="banner_image">
    <center>
        
        <div class="container">
		 <div class="row row_style">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>SIgnup</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">SIGNUP TO EXPLORE</p>
                             <div class="container">
            <div class="row">
                <div class="col-xs-4 ">
                    
                   <form method="POST" action="signup_script.php">
                        <div class="form-group">
                            <input type="text"  class="form-control" name="name"  placeholder="name" required>
                        </div>
                     
                        <div class="form-group">
                            <input type="text"  class="form-control" name="email" placeholder="email" required>
                        </div>
                        
                        <div class="form-group">
                            <input type="password"  class="form-control" name="password" placeholder="password" required>
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="address" placeholder="address" required>
                        </div>
                        <div class="form-group">
                            <input type="text"  class="form-control" name="city" placeholder="city" required>
                        </div>
                        <div class="form-group">
                            <input type="contact"  class="form-control" name="phone" placeholder="phone" required>
                        </div>
                       
                        <button type=submit class="btn btn-primary">submit</button>
                       
                    </form>
                </div>
            </div>
        </div>
           </center><br><br><br><br><br><br><br><br>
        </div>
 <?php
        include 'footer.php';
        ?>
            
        
    </body>
</html>