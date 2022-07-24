<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=`device-width`, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$students = array("Rabbany", "Rajib", "Rakib", "Mahadi", "Hasan");
?>
<table border ="1">
    <tr>
        <th>Students name</th>
    </tr>

<?php
 foreach($students as $student){ ?>
  <tr>
    <th>
        <?php echo $student; ?>
    </th>
  </tr>

    <?php
 }
?>
</table>
</body>
</html>