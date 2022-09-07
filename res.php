<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Grandstander&display=swap');

        body{
            background-color:red;
            background: linear-gradient(rgba(0, 0, 0, 0.61),rgba(25, 25, 24, 0.826) .100%), url("https://www.oficinadanet.com.br/media/post/27852/1400/google-maps-truques_1400x875_5d8ec1be6e50d.jpg");
            font-family: 'Grandstander';
        }

        h1{
            text-align: center;
            color: #FD892D;
            font-weight: 600;
        }

        div{
            display: block;
            margin: auto;
            background-color: rgba(255, 255, 255, 0.726);
            width: 300px;
            border: 1px solid black;
            border-radius: 15px;
            box-shadow: 1px 1px 1px rgba(0, 0, 0, 0.432);
            padding: 5px;
        }

        p{
            font-size:26px;
            text-align:center;
        }

        .enviar{
            margin-top: 30px ;
            text-align: center;
        }

        .botao{
            background-color: #FD892D;
            color: white;
            height: 35px;
            width: 150px;
            border:1px solid black;
            border-radius: 5px;
            transition: 0.5s;
        }

        .botao:hover{
            -webkit-transform: scale(1.1);
            -ms-transform: scale(1.1);
            transform: scale(1.1);
        }
    </style>
    <title>Document</title>
</head>
<body>
    <?php
    $totbeb = 0;
    $totlan = 0;
    $total = 0;
    $frete = 7;
    $fretefrase = "Taxa de Frete R$:7.00";

    $quantref = $_POST['a'];
    $quantsuc = $_POST['b'];
    $quantxsal = $_POST['c'];
    $quantxbur = $_POST['d'];
    $quantxegg = $_POST['e'];
    $quantxcal = $_POST['f'];
    $quantxbac = $_POST['g'];
    $quantxtudo = $_POST['h'];

    $valref = 4.99;
    $valsuc = 4.99;
    $valxsal = 13.99;
    $valxbur = 11.99;
    $valxegg = 14.99;
    $valxcal = 17.99;
    $valxbac = 19.99;
    $valxtudo = 21.99;

    $totbeb = ($quantref * $valref) + ($quantsuc *$valsuc);
    $totlan = ($quantxsal * $valxsal) + ($quantxbur * $valxbur) + ($quantxegg * $valxegg) + ($quantxcal * $valxcal) + ($quantxbac * $valxbac) + ($quantxtudo * $valxtudo);
    $total= $totbeb + $totlan;

    if($total > 50){
        $fretefrase = "Frete grátis !";
    }elseif ($total == 0){
        $fretefrase = "Nenhum item adicionado ao carrinho";
    }

        if($total < 50 && $total > 0){
            $total = $total + $frete ;
        }

    ?>
    <h1>Seu Pedido está sendo preparado !</h1>
    <div>
        <p>Total gasto com Bebidas : <?=$totbeb;?></p>
        <p>Total gasto com Lanches : <?=$totlan;?></p>
        <p><?=$fretefrase;?></p>
        <p>Total a pagar : <?=$total;?></p>
        <p class="enviar"><a href="pag1.php"><input class="botao" type="button" value="Voltar"></a></p>
    </div>
</body>
</html>