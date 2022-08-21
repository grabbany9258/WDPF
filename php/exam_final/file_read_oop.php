<?php
    class fileread{
        public function getdata(){
            // $fh = fopen("fileread.txt", 'r');
            // while(!feof($fh)){
            //     $data = fgets($fh);
            //     echo $data .'<br>';
            // }

            // 2 vabei kora jay ...

            $lines = file('fileread.txt');
            foreach($lines as $line){
                echo $line . "<br>";
            }
        }

    }
    $obj1 = new fileread();
    $obj1->getdata();

?>