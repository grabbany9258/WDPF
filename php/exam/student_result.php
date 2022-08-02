<?php
        if(isset($_POST['search'])){
            $sid =$_POST['id'];
            $st1 = new student;

            echo $st1->result($sid);    
        }
   
    class student{
        public $id;
        public $name;
        public $batch;
        public $lines;

        public function __construct(){
            $lines = file('result.txt');
            $this->lines =$lines;
        }
        public function result($sid){
              foreach($this->lines as $line){
                list($id, $name, $batch, $result) =explode("," , $line);
                if($id==$sid){
                    $output = "<h3>ID: $id</h3>";
                    $output .= "<h1>Name: $name</h1>";
                    $output .= "Batch: $batch<br>";
                    $output .= "Result: $result";        
                }
            }
            return $output;
        }
    }
    ?>
   
<h1>Result Search</h1>
<form action=""method="post">
    <input type="text" name="id">
    <input type="submit" name="search" value="SEARCH">
</form>
