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
        # maior de 16 anos, sendo facultativo o voto
        $a = isset($_GET["ano"]) ? $_GET["ano"] : 1900;
        $i = date("Y") - $a;
        echo "Você nasceu em $a e tem $i anos.";
        if($i < 16){
            $v = "não pode votar ainda";
            $d = "não pode dirigir";
        }
        else {
            if($i >= 16 && $i < 18){
                $v = "pode optar por votar ou não";
                $d = "não pode dirigir";
            } else if($i > 65){
                $v = "pode optar por votar ou não";
                $d = "pode dirigir";
            }
            else{
                $v = "deve votar";
                $d = "pode dirigir";
            }
        }
        echo " Portanto, você $v e $d.";
        ?>
    </div>
    <a href="aula09b.html"> Voltar</a>
</body>
</html>
