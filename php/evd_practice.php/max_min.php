<h1>Maximum & Minimum Number:</h1>
<?php
 $numbers=[70,45,35,75,67,89,90];
		$max=$numbers[0];
		$min=$numbers[0];

		for ($i=0; $i<count($numbers); $i++){
//Maximum Number
			if($max>$numbers[$i]){
				$max = $max;
			}
			else{
				$max = $numbers[$i];
			}
//Minimum number
			if($min<$numbers[$i]){
				$min = $min;
			}
			else{
				$min = $numbers[$i];
			}
		}
		echo "<h2>Maximum number is : " . $max . "</h2>";
		echo "<h2>Minimum number is : " . $min . "</h2>";
        ?>
    

