<?php
    class fileread{
        public function getdata(){
            // $fh = fopen("file_read.txt", 'r');
            // while(!feop($fh)){
            //     $data = fgets($fh);
            //     echo $data .'<br>';
            // }
            $lines = file('fileread.txt');
            foreach($lines as $line){
                echo $line . "<br>";
            }
        }

    }
    $obj1 = new fileread();
    $obj1->getdata();

?>