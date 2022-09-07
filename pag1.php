<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Restaurante</title>
</head>
<body>
    <h1> Bidi Lanches </h1>
    <div>
    <form action="res.php" method="post" autocomplete = "off">
        <p>Refrigerante R$5,00 <BR> <input type="text" name="a" value="0"  required /></p>
        <p>Suco R$5,00: <BR> <input type="text" name="b" value="0"  required /></p>
        <p>X-Salada R$13,90: <BR> <input type="text" name="c" value="0"  required /></p>
        <p>X-Burger R$11,90: <BR> <input type="text" name="d" value="0" required /></p>
        <p>X-Egg R$14,90: <BR> <input type="text" name="e" value="0"  required /></p>
        <p>X-Calabresa R$17,90: <BR> <input type="text" name="f" value="0"  required /></p>
        <p>X-Bacon R$19,90 : <BR> <input type="text" name="g" value="0"  required /></p>
        <p>X-Tudo R$21,90: <BR> <input type="text" name="h" value="0" required /></p>
        <p>Pedidos acima de R$50,00 o frete é por nossa conta !</p>
        <p class="enviar"><input class="botao" type="submit" /></p>
        </form>
    </div>
</body>
</html>