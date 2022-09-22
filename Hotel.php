<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            $c = array("0", "1", "2","3", "4", "5");
            $random_keys=array_rand($c,6);
            
            $taula = array(
                array("1","$c[$random_keys[0]]"),
                array("2","$c[$random_keys[1]]")
            );
            for($n=0; $n < 10; $n++)
                
        ?>
        <p>A la taula <?php echo $taula[$n]  ?> hi ha </p>
        <p>A la taula <?php echo $n ?></p>
    </body>
</html>
