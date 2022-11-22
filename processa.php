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
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <div class="btm position-absolute top-50 start-50 translate-middle">
        <h5>Seu Salario é: </h5>
        <label for="" class="primary"><?php echo $valor; ?></label> <br><br>
        <h5>Esse Será o Inposto que Você ira Pagar:</h5>
        <label for="" clas=""><?php inposto($valor) ?></label>
    </div>
</body>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</html>
