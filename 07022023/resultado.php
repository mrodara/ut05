<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>CALCULADORA DEL MANU</h3>

    <?php 

        if($_POST['operador'] == '+'){
            echo $_POST['operando1'] + $_POST['operando2']; 
        }elseif($_POST['operador'] == '-'){
            echo $_POST['operando1'] - $_POST['operando2'];
        }elseif($_POST['operador'] == '*'){
            echo $_POST['operando1'] * $_POST['operando2'];
        }elseif($_POST['operador'] == '/'){
            echo $_POST['operando1'] / $_POST['operando2'];
        }else{
            echo "No ha seleccionado ninguna operación";
        }
    
    ?>


    <hr>

    <?php 
    
        switch ($_POST['operador']) {
            case '+':
                # code...
                echo $_POST['operando1'] + $_POST['operando2'];
                break;
            case '-':
                echo $_POST['operando1'] - $_POST['operando2'];
                break;
                    
            default:
                # code...
                echo "No ha seleccionado ninguna operación";
                break;
        }
    ?>


</body>
</html>