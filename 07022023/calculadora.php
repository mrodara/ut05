<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="resultado.php" method="post">
        <input type="number" name="operando1" step="0.01" required placeholder="Operando 1">
        <br>
        <input type="number" name="operando2" step="0.01" required placeholder="Operando 2">
        <br>
        <select name="operador" required>
            <option value="">Elija una opción</option>
            <option value="+">Suma</option>
            <option value="-">Resta</option>
            <option value="*">Multiplicación</option>
            <option value="/">División</option>
        </select>
        <br>
        <button type="submit">Enviar datos</button>
    </form>
</body>
</html>
