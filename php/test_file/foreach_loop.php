<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<h1>ForEach loop without Table</h1>

<?php
$names = array('Rabbany', 'Kamal', 'Aklima', 'Kamran', 'tauhuid');
foreach ($names as $name) {
    echo "ForEcah Loop name <b>" . $name . "</b> <br>";
}

?>

<h1 class="text-center my-5">ForEach loop with Table</h1>


<table class="table table-striped table-bordered text-center">

    <tr>
        <th>SL</th>
        <th>Name</th>
    </tr>

    <?php
    $count = 1;
    $names = array('rabbany', 'kamal', 'aklima', 'kamran', 'tauhuid');
    foreach ($names as $name) : ?>
        <tr>
            <td><?= $count ?></td>
            <td><?= $name ?></td>
        </tr>

    <?php
        $count++;
    endforeach;
    ?>

</table>