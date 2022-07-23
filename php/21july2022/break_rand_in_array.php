<?php
// // in array dekhay oi array ar moddhe number ta ace ki na... True or false output dey...Thakle True dey mane 1...
//     $numbers = array(5,15,20,30);
//    echo $randNumber =rand(1,50);

//    echo "<br>";
//    echo in_array($randNumber, $numbers);
?>

<?php
    $primes =array (2,3,5,7,11,13,17,19,23,29,31,37,41,43,47);
    

    for($i=1; $i<100; $i++){
        echo "<h3>$i</h3>";
        $randnumber = rand(1,50);
        
        if(in_array($randnumber, $primes)){
            echo "Found my prime number $randnumber";
            break;

        }else{
            echo "Not found $randnumber in prime list";
            // break;

        }
    }


?>