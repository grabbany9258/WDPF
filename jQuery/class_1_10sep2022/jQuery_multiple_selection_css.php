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
    

        // $(document).ready(function(){
        //     $("p").click(function(){
        //         $(this).hide();
        //     });

        // });


        // $(document).ready(function(){
        //     $("button").hover(function(){
        //         $("p").hide();
        //     });

        // });



        $(document).ready(function(){
            $("button").click(function(){
                $("h1,h2,p").css("color", "blue");
            });

        });



</script>


    
</head>
<body>
    <p>This is rabbany</p>
    <h1>This is rabbany</h1>
    <h2>This is rabbany</h2>
    <button>Color This when Click </button>
</body>
</html>