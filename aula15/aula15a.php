<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title></title>
</head>
<body>
    <?php
        # Como utilizar rotinas externas
    # -> são rotinas que vc criou, mas que não estão
    # exclusivamente dentro do seu arquivo. Pode criar um pacote de rotinas e usa-las de um pacote separado
    // conceito de reuso
    include "funcoes.php";
    echo "<h1>Testando novas funções: </h1>";
    ola();
    mostraValor(4);
    echo "<h2>Final do programa</h2>";
    # include != require
    # o include, caso n seja encontrado, o programa ainda funciona, tentando carregar
    # O require, caso n seja encontrado, não funcionará. A carga do script para
    # include_once e require_once -> caso exista carregado, n carrega de novo. se não carregou, carrega 1x so
    ?>
</body>
</html>
