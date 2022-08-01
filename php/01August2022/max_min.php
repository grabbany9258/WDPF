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
    
</body>
</html>

<!-- <script>
	var numbers=[70,45,35,75,67,89,90];
		var max=numbers[0];
		var min=numbers[0];

		for (var i in numbers){
//Maximum Number
			if(max>numbers[i]){
				max = max;
			}
			else{
				max = numbers[i];
			}
//Minimum number
			if(min<numbers[i]){
				min = min;
			}
			else{
				min = numbers[i];
			}
		}
		document.write("<h2>Maximum number is : " + max + "</h2>");
		document.write("<h2>Minimum number is : " + min + "</h2>");
	</script> -->