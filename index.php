<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Descrivint a John Doe</title>
    </head>
    <body>
        <?php
            $nom = "John";
            $cognom = "Doe";
            $edat = 30;
            $datan = date("1986-03-11");
            $telefon = 93555555;
            $adreçap = "Blackpool, England";
            $adreçae = "oswin@dr.who";
            $treballa = "no";
        ?>
        <h1> Descrivint a <?php echo $nom ." ". $cognom ?></h1>
        <h2> Les dades de John són: </h2>
        <ul>
            <li> Es diu: <?php echo $nom ." ". $cognom ?> </li>
            <li>Té <?php echo $edat ?> anys</li>
            <li>Va néixer l'any:  <?php echo $datan ?> </li>
            <li>El seu telèfon és: <?php echo $telefon ?></li>
            <li>Viu a <?php echo $adreçap ?></li>
            <li>El seu e-mail és el <?php echo $adreçae ?></li>
            <li>i actualment <?php echo $treballa ?> treballa</li>
        </ul>

    </body>
</html>