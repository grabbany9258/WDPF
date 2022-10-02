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
           $("#divisonsid").change(function(){
           var id =  $(this).val();
        //    alert(id);

           $.get('district.php', {divid:id}, function(data){
            $("#district").html(data);

           })
           }) 
        });

    </script>
</head>

<body>
<h2>Divisons name</h2>
    <form action="" method="post">
        <select id="divisonsid">
            <option value="" disabled selected>Select One</option>

            <?php
            $db = new mysqli('localhost', 'root', '', 'wdpf51');
            $sql = "SELECT * FROM  divisions";
            $result = $db->query($sql);

            while ($row = $result->fetch_assoc()) { ?>
                <option value=" <?php echo $row['divid']; ?>"><?php echo $row['divname']; ?></option> 


            <?php  } ?>

            ?>
        </select> <br>
        <select  id="district">
                <option value="" selected disabled>Select One</option>
         </select>
    </form>
   
</body>

</html>