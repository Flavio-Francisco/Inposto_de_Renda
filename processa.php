<?php
$valor = $_POST['valor'];
function inposto($valor){
    switch ($valor){

        case $valor <= 1900:
            $inpostoRenda = 0;
            echo $inpostoRenda;
        break;
        
        case $valor > 1900:
            $inpostoRenda = ($valor * 7.5)/100;
            echo $inpostoRenda;
        break;  
        
        default:
        $inpostoRenda = "Opção Invalida!";
        echo $inpostoRenda;
        break;

    }
}
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <div>
        <h5>Seu Salario é: </h5>
        <label for=""><?php echo $valor; ?></label> <br><br>
        <h5>Esse Será o Inposto que Você ira Pagar:</h5>
        <label for=""><?php inposto($valor) ?></label>
    </div>
</body>
</html>
