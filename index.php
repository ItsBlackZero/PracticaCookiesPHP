<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>

</head>
<body style="background-color: <?php echo isset($_COOKIE["preferencia"]) ? htmlspecialchars($_COOKIE["preferencia"]) : 'white'; ?>;">
    <h1>Preferencias del usuario</h1>
    <form action="cookies.php" method="POST">
        <select name="preferencia" id="preferencia">
            <option value="blue">azul</option>
            <option value="green">verde</option>
            <option value="purple">morado</option>
            <option value="red">rojo</option>
        </select>
        <?php echo $_COOKIE["preferencia"]?>;
        <input type="submit" name="enviar" value="enviar">
    </form>
    
</body>
</html>

