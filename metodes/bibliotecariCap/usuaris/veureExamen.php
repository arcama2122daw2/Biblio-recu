<?php
session_start();
if (!isset($_SESSION["nom"])) {
    header("Location: login.html");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualitzacio Usuari</title>
    <link rel="stylesheet" type="text/css" href="css/estilsVeureUsuari.php">

</head>

<body>
    <div>
        <h1 style="text-align: center;">Biblioteca</h1>
        <hr>
    </div>
    <div>
        <a href="../../../funcions/funcionsUsuarisBC.php"><input type="button" Value="<-- Enrere" /></a><br><br>
    </div>
    <div class="dadesUsuari">
        Usuari:<input id="UsuariObert" value="<?php echo $_SESSION['nom']; ?>">
        <br><br>
        Vosté és:<input id="funcio" value="<?php echo $_SESSION['rol'] ?>">
        <br><br>
        Codi Sessió:<input id="funcio" value="<?php echo session_id(); ?>">
        <input id="tancaSessio" type="submit" value="Log Out" onclick="location='../../../index/logout.php'" />
    </div>
        
        <?php

        $fitxer_usuaris = "../../../dades/usuaris";
        $fp = fopen($fitxer_usuaris, "r") or die("No s'han pogut validar els llibres");

        $printdeechos = "";

        if ($fp) {
            $mida_fitxer = filesize($fitxer_usuaris);
            $usuaris = explode(PHP_EOL, fread($fp, $mida_fitxer));


            $printdeechos = "<table>
                <br><br><hr style=\"float:left; width:78.5%\"><br>
                <h4>Tots els Usuaris i bibliotecaris</h4>
                <tr>
                    <td><b>Nom</td>
                    <td><b>Cognom</td>
                    <td><b>Adreça electrònica</td>
                    <td><b>Telefon</td>
                </tr>";

            foreach ($usuaris as $usuari) {
                $logpwd = explode(":", $usuari);
                
                $printdeechos .= "<tr>";
                $printdeechos .= "<td> $logpwd[0] </td>";
                $printdeechos .= "<td> $logpwd[1] </td>";
                $printdeechos .= "<td> $logpwd[2] </td>";
                $printdeechos .= "<td> $logpwd[3] </td>";
                $printdeechos .= "</tr>";
                
            }
        }
        
        fclose($fitxer);
        echo $printdeechos;

        $_SESSION["PDF"] = $printdeechos;

        ?>

    </table>
    <br><br><hr><br>
</body>

</html>