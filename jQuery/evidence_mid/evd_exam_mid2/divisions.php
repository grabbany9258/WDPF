<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #districts{border: 2px solid black; padding: 5px; font-size: medium; font-weight: bolder; background-color: cadetblue; color: white; }
        #divsions_id{border: 2px solid black; padding: 5px; font-size: medium; font-weight: bolder; background-color: cadetblue; color: white;}
        /* .div{font-weight: bolder;} */
        /* .dis{ margin-left: 400px; padding-top: 0 auto;} */

    </style>
    <script src="../../jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#divsions_id").change(function(){
                var id = $(this).val();
                // alert (id);
                $.post("districts.php", {div_id:id}, function(data){
                    $("#districts").html(data);
                    // alert(data);
                })
            })
        });
    </script> 
</head>
<body>

    <form action="" method="post">
    <h1 class="div">Divisions List</h1>
        
        <select id="divsions_id">
        
       
                <option value="" disabled selected> Select One</option>

                <?php 
                    $db =new mysqli('localhost', 'root', '', 'wdpf51');
                    $sql= "SELECT * FROM divisions";
                   $result =  $db->query($sql);
                while ($row = $result->fetch_assoc()){ ?>

                    <option value="<?php echo $row['divid']  ?>"> <?php echo $row['divname']  ?></option>
               <?php }

                ?>
        </select>
        <div class="dis">
        
        <h1>Division wise District</h1>
         <select id="districts">
         
        <option value="">Select One</option>
        </select>
        </div>
       
        
        
    </form>

    
</body>
</html>