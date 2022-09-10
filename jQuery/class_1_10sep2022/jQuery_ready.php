<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script
        src="https://code.jquery.com/jquery-3.6.1.min.js"
        integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ="
        crossorigin="anonymous">
</script>

<script>
        $(document).ready(function(){
            $("button").click(function(){
                $("#para1").hide();

            })
            $(".btn2").click(function(){
                $("#para1").show();
            })
            
            $(".btn3").click(function(){
                $("#para2").toggle();
        })
    });
    </script>   
</head>

<body>

<button class="btn1">Hide paragraph</button>
<button class="btn2">Show paragraph</button>
<button class="btn3">Hide/Show paragraph</button>



<p id="para1">Hello world this is rabbany</p>
<p id="para2">Hello world this is rabbany   world this is ra  world this is ra  world this is ra  world this is ra  world this is ra</p>


</body>
</html>