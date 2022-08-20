<?php include_once("dbconfig.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script> 
    <title>Document</title>
</head>
<body>
    <div class="container">
        <table class="table table-striped">
            <tr>
                <th>Number</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
            </tr>

            <?php
                $sql = "SELECT * FROM employees";
                $result = $db->query($sql);
                while($data= $result->fetch_assoc()) {
            ?> 
            
                    <tr>
                        <td><?php echo $data['employeeNumber']; ?></td>
                        <td><?php echo $data['firstName']; ?></td>
                        <td><?php echo $data['lastName']; ?></td>
                        <td><?php echo $data['email']; ?></td>
                        
                    </tr>

            <?php } ?>


          

        </table>
    </div>
   
</body>
</html>