<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <h3>Construccion de expresions en PHP</h3>
        <?php
        $primera="Primera linea de texto";
        $segunda="Segunda linea de texto";
        $tercera="Tercera linea de texto";
        $resultado=$primera."<br/>".$segunda."<br/>".$tercera;
        echo $resultado;
        echo "<br/> El numero de caracteres de cadena resultante é: ".strlen($resultado);
        ?>
    </body>
</html>