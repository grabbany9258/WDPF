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
    <title>Document</title>
</head>
<body>
    <script>
         $(document).ready(function(){
            $("button").click(function(){
                $("p:first").css("background-color", "green");
            
            $("li:last").css("font-size", "20px");
        });

        });
    </script>



    

    <p>This is rabbany</p>
    <p>This is Japan the country of sun</p>
    
    <h1>This is rabbany</h1>
    <h2>This is rabbany</h2>

    <ul>
        <li>Dhaka</li>
        <li>india</li>
        <li>Pakistan</li>
    </ul>
    <button>Color This when Click </button>
    
</body>
</html>