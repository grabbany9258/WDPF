<?php


// $age=array("peter"=>"37","joe"=>"40","abir"=>"45","rahi"=>"43");

// echo "Peter is ". $age["peter"]. " years old";

// $cars= array("Toyota","BMW","Corola");
// $arrlength=count($cars);
// for ($x=0;$x<$arrlength;$x++){
//     echo $cars[$x];
//     echo "<br>";
// }

$x=1;
while($x<10){
    echo "The number is: $x <br>";
    $x++;
}
?>

<script>
    let text="";
    let i =0;
    while(i<=10){
        text+= "<br> The number is: " +i;
        i++;
    }
    document.write(text);
</script>

<br>

<script>
    let text="";
    let i=0;
    while(i<=10){
        text += "<br> The number is: " +i;
        i++;
    }
    document.write(text);
</script>

<?php
    $x=1;
    do{
        echo "This is your number:$x <br>";
        $x++;
    }
    while($x<=7);
?>

<script>
    let text="";
    let i=0;

    do{
        text+="<br> Number is:"+i;
        i++;
    }
    while(i<=9);
    document.write(text);
</script>