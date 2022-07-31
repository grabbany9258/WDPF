<?php
     class student{ 
        public  $id;
        public $name;
        public $batch;
        public $lines;

        public function __construct(){
            $lines=file(result2.txt);
            $this->lines=$lines;
        }


        public function result($sid){

            foreach($this->lines as $line){
                list($id,$name,$batch,$result)=explode(",",$line);
                if($id==$sid){
                    $output="<h1>ID: $id </h1>";
                    $output="ID: $name";
                    $output="ID: $batch";
                    $output="<h3>ID: $id </h3>";

                }

            }
            return $output;
        }
}

?>

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
    if(isset($_POST['search'])){
        $sid=$_post['id'];
        $st1 = new student;

        echo result($sid);

    }
        


?>
    <form action="">
        <input type="text" name="id">
        <input type="submit" name="search" value="Search">
    </form>
</body>
</html>