<?php
?>

<!DOCTYPE html>
<html lang="cat">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" type="text/css" href="css/estilsIndex.php"> 
<body>
    <div>
        <h1 style="text-align: center;">Biblioteca</h1>
        <hr>
    </div>
    <div class="mainIndex" >
        <h3>Inicia Sessió</h3>
        <form action="sesion.php" method="POST">
        Usuari: <input type="text" name="usuari">
        Contrassenya: <input type="password" name="contrassenya">
        <input type="submit" value="Log In"></input>
    </form>
    </div>
</body>
</html>