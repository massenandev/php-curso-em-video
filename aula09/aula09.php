<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/stilo.css">
    <title></title>
</head>
<body>
    <div>
        <?php
            $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
            $i = date("Y") - $a;
            echo "Você nasceu em $a e tem $i anos.";
            if($i >= 18){
                $v = "já pode votar";
                $d = "já pode dirigir";
            }
            else {
                $v = "não pode votar ainda";
                $d = "não pode dirigir";
            }
            echo " Portanto, você $v e $d também.";
        ?>
    </div>
    <a href="aula09.html"> Voltar</a>
</body>
</html>
