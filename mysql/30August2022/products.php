<?php $db = new mysqli('localhost', 'root', '', 'wdpf51_exam')?>
<table border=1>
    <tr>
        <th>ID</th>
        <th>PRoduct Name</th>
        <th>Price</th>
        <th>Manufacturer</th>
    </tr>
    <?php   
       $sql = "SELECT * FROM product_info_view";
       $result = $db->query($sql);
      while($row = $result->fetch_assoc()){ ?>

        <tr>
                <td><?php echo $row['id'] ?></td>
                <td><?php echo $row['product_name'] ?></td>
                <td><?php echo $row['price'] ?></td>
                <td><?php echo $row['manufacturer_name'] ?></td>
                
            </tr>

    <?php  } ?>

    
    
</table>