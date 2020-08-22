<!DOCTYPE html>
<html>
<head>
    <?php
    # Permitir a personalização de um texto através de um formulário
    $txt = isset($_GET["t"]) ? $_GET["t"] : "[Texto genérico]";
    $tam = isset($_GET["tam"]) ? $_GET["tam"] : "[Tamanho genérico]";
    $cor = isset($_GET["cor"]) ? $_GET["cor"] : "#000000";

    ?>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/stilo.css">
    <title></title>
    <style>
        span.texto {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }
    </style>
    <?php
        echo "<span class='texto'>$txt</span>"
    ?>
</head>
</html>
