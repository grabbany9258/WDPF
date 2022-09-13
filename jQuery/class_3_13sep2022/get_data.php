<?php
//    echo  $_GET['id'];
$id = $_GET['id'];
$db = new mysqli('localhost','root', '', 'wdpf51');

$sql = "SELECT * FROM students WHERE student_batch='$id'";
$result = $db->query($sql);

// ata no Data found korar jonno kora hoice
if($result->num_rows>0){

?>




<table border ="1">
    <tr>
        <!-- <th>ID</th> -->
        <th>student id</th>
        <th>student name</th>
        <th>student email</th>
        <th>student phone</th>
    </tr>

<?php 
while($row = $result->fetch_assoc()){ ?>

    <tr>
        <!-- <td> <?php echo $row['id'] ?> </td> -->
        <td> <?php echo $row['student_id'] ?> </td>
        <td> <?php echo $row['student_name'] ?> </td>
        <td> <?php echo $row['student_email'] ?> </td>
        <td> <?php echo $row['student_phone'] ?> </td>
        
    </tr>

<?php } ?>

</table>

<?php
}
else{
    echo "<h1> No Data Found</h1>";
}
?>

