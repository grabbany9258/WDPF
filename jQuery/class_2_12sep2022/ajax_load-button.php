<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>
<body>
     <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Error rerum impedit autem rem voluptas esse porro quo accusamus molestias amet praesentium, earum delectus incidunt ipsum hic nostrum obcaecati cum facilis.</p>

    <h1 id="abc"></h1>

    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Quidem, cum. Deserunt, voluptates eius nostrum accusamus, ab in quisquam eaque sint saepe magnam dolorem deleniti id tempore possimus excepturi optio veritatis.</p>

    <button id="btn1">Click Here</button>

    <script>
        $(document).ready(function () {
           $("#btn1").click(function(){
            $("#abc").load('data.php');
           })
        });
    </script>
</body>
</html>