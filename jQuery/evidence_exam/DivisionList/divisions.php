<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    <h1>Divisons List</h1>
    <select id="divisons_id">
        <option value="" disabled selected> Select One</option>
    <?php
        $db = new mysqli('localhost','root', '', 'wdpf51');
        $sql = "SELECT * FROM divisions";
        $result = $db->query($sql);
        while($row = $result->fetch_assoc()){ ?>

        
            <option value="<?php echo $row['divid'] ?>"><?php echo $row['divname'] ?></option>
        


       <?php }   ?>

</select>
<select id="district">
    <option value="">Select one</option>
</select>
 


  
</body>
</html>