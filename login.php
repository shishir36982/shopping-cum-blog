<?php
require "common.php";


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
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>                        
                    </button>
                    <a class="navbar-brand" href="index.php">Lifestyle Store</a>
                </div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                    </ul>
                </div>
            </div>
        </nav>
      <div id="banner_image">
        <div class="container">
            <div class="row row_style">
                <div class="col-xs-6 col-xs-offset-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h4>login</h4>
                        </div>
                        <div class="panel-body">
                            <p class="text-warning">login to make purchase</p>
                             <div class="container">
            <div class="row">
                <div class="col-xs-4 ">
                    
                    <form method="POST" action="Login_submit.php">
                        <div class="form-group">
                            <input type="text"  class="form-control" name="email"  placeholder="email" >
                        </div>
                        <div class="form-group">
                            <input type="password"  class="form-control" name="password" placeholder="password">
                        </div>
                          <button type="submit"  class="btn btn-primary">login</button>
                    </form>
                </div>
            </div>
        </div>
                            
                        </div>
                        
                        <div class="panel-footer"><p class="text-warning">Don't have an account ? </p><a href="signup.php">Register</a></div>
                    </div>
                </div>
            </div>
        </div>
      </div>
        
     <?php
        include 'footer.php';
        ?>
            
        
    </body>
</html>