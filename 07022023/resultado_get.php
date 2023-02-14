<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div style="border: 1px solid #b3f3a3; padding:5px; margin:3px">
        <?php 
            foreach($_POST as $key => $value){

                echo "<p>" .strtoupper($key) . ":" . $value. "</p>";
                
            }0
        
        ?>
    </div> 
</body>
</html>