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

        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

      
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
        ?><br>

        <div id="banner_image">
            <div class="container">
                <div id="banner-content">
                    <h3>Welcome to your Student Lifestyle!!</h3>
                    <p> upto 50% off on premium brands</p>
                    <a href="products.php" class="btn btn-danger
                       btn-lg active" >Shop Now</a>
                </div>
            </div>
        </div>
    <?php
        include 'footer.php';
        ?>
    </body>
</html>