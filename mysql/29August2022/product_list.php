<?php $db = new mysqli('localhost', 'root', '', 'wdpf51_exam')  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrape CDN -->

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 

    <!-- Bootstrape CDN close -->


    <title>Document</title>
    </head>
    <body>
        <h1 style="text-align:center; padding: 20px;">PRODUCT INFO VIEW</h1>
    <div class="container">
        <table class= "table table-striped">
            <tr>
                <th>Product Id</th>
                <th>Product Name</th>
                <th>Manufacturer Name</th>
                <th>Price</th>
            </tr>

            <?php
            $sql = "SELECT * FROM product_info_view";
            $result = $db->query($sql);
            while($data = $result->fetch_assoc()){ ?>

            <tr>
                <td><?php echo $data['id']; ?></td>
                <td><?php echo $data['product_name']; ?></td>
                <td><?php echo $data['manufacturer_name']; ?></td>
                <td><?php  echo $data['price']; ?></td>      
            </tr>

            <?php } ?>

        </table>
    </div>
    </body>
    </html>

    

        
        
        
       
