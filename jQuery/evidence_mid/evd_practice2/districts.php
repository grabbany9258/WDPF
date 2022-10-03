<?php
     $db =new mysqli('localhost', 'root', '', 'wdpf51');
    $div_id =   $_POST['div_id'];

    $sql = "SELECT * FROM districts WHERE dist_divid = '$div_id'";
    $result = $db->query($sql);

   while($row =$result->fetch_assoc()){  ?>

    echo "<option value= <?php echo $row['distid'] ?>> <?php echo $row['distname']?></option>";



<?php }






?>