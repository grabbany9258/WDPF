<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $results = array(
            array("id"=> 1, "Name"=>"student1", "Mcq"=>40, "Descriptive"=>37, "Evidence"=>30),
            array("id"=> 2, "Name"=>"student2", "Mcq"=>28, "Descriptive"=>40, "Evidence"=>40),
            array("id"=> 3, "Name"=>"student3", "Mcq"=>45, "Descriptive"=>39, "Evidence"=>45)

        );
        // echo "<pre>";
        // print_r($results);

        foreach($results as $student){
            list($id, $name, $MCQ, $DES, $EVD)= array_values($student);
            if(($MCQ+$DES>=70 && $EVD>=30)){
                echo "ID:  $id Name:  Written: " . ($MCQ + $DES) . " Result: PASS <br>";
            }else{
                echo "ID:  $id Name:  Written: " . ($MCQ + $DES) . " Result: FAIL <br>";
            }
        }


    ?>
</body>
</html>