<?php
    $db = new mysqli("localhost", "root", "", "wdpf51_batch_students");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="jquery.min.js"></script>
    <script>
        $(document).ready(function () {
           $("#batchid").change(function(){
           var id =  $(this).val();

           $.get('student_list.php', {bid:id}, function(data){
            $("#show").html(data);

           })
           }) 
        });

    </script>
</head>
<body>

        <form action="">
            <select id="batchid">
                <option value="" disabled selected>Select One</option>
                <?php
                $sql = "SELECT * FROM batches";
                $result = $db->query($sql);
                while($row= $result->fetch_assoc()){ ?>

                <option value=" <?php echo $row['batch_id'];?>"><?php echo $row['batch_name'];?></option>

        <?php  } ?>
                
            </select>
        </form>
        <div id="show"></div>
    
</body>
</html>