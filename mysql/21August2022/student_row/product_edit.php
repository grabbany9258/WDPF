<!-- Amar Data base ar sathe mile na  -->

<?php $db = new mysqli('localhost', 'root', '', 'wdpf51'); ?>
<?php
        $id1 = $_GET['id'];
        $result = $db->query("SELECT * FROM products WHERE product_id=$id1");
        $data = $result->fetch_assoc();
    ?>
    <div class="container">
        <h1>Product Update Form</h1>
        <form action="" method="post">
            <input type="number" name="id" value="<?php echo $data['product_id'];?>" placeholder="Enter product id">
            <input type="text" name="name" value="<?php echo $data['product_name'];?>" placeholder="Product name">
            <input type="text" name="price" value="<?php echo $data['product_price'];?>" placeholder="Enter price">
            <input type="submit" name="submit" value="UPDATE PRODUCT">
        </form>
        <hr>
        <a href="productList.php">Product List</a>
    </div>
   
    <?php
   
      extract($_POST);
        if(isset($submit)){
          $sql = "UPDATE products SET product_id='$id', product_name='$name', product_price='$price' WHERE product_id=$id1";
          $db->query($sql);

        if($db->affected_rows > 0){
            header("Location:productEdit.php?id=$id");
        }
      }

    ?>