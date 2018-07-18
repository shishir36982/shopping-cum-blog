<?php
include "common.php";


?>
<!DOCTYPE html>
<html lang="en">
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
    </head>
    <body>
        <?php
        include 'header.php';
        ?><br><br><br><br>
            <div class="row decor_bg">
                <div class="col-md-6 col-md-offset-3">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th>Item Number</th>
                                <th>Item Name</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td><td>items</td><td><?php
              $user_id=$_SESSION['id'];
              $select_query = "SELECT items.name,items.price,users_items.item_id FROM users_items,items WHERE  user_id ='$user_id' and users_items.status='added to cart' and users_items.item_id=items.id";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));

if(mysqli_num_rows($select_query_result) == 0){
    header('location: products.php?items_error=add items');
}
else{
   
    while ($row = mysqli_fetch_array($select_query_result)) {
       echo $row['name'];
   
    }

    
}

?>
                            </tr>
                            <tr>
                                <td></td><td>Total</td><td>Rs<?php
              $user_id=$_SESSION['id'];
              $select_query = "SELECT items.name,items.price,users_items.item_id FROM users_items,items WHERE  user_id ='$user_id' and users_items.status='added to cart' and users_items.item_id=items.id";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));

if(mysqli_num_rows($select_query_result) == 0){
    header('location: products.php?items_error=add items');
}
else{
    $sum=0;
    while ($row = mysqli_fetch_array($select_query_result)) {
        $sum=$sum+$row['price'];
   
    }

    
}
echo $sum;
?>
              
              </td><td><a href='success.php' class='btn btn-primary'>Confirm Order</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    <?php
        include 'footer.php';
        ?>
    </body>
</html>
