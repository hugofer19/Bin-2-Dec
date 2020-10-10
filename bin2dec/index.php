<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="titulo">
            <h2>Binário <=> Decimal</h2>
        </div>
        <form class="formulario" method="post">
            <input type="text" name="valorbin" placeholder="Valor Binário" class="txtbox">
            <br><br>
            <input type="submit" name="enviar" value="Enviar" class="btntxt">
        </form>
        <?php
        $vl = $_POST['valorbin'];
        $valor = bindec($vl);

            if(isset($_POST["enviar"])){
                echo "<p class='value'>Valor decimal: $valor<p>";
            }
        ?>
    </body>
    <img src="nayorken.png" class="logo">
</html>