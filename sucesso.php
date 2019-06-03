<?php





function validarCompra($dadosCompras){
    $erros = [];
    if(!$dadosCompras){
        $erros[] = "Não foi recebido nenhum dado para realizar a compra!";

    }
    if(!validarNome($dadosCompras['nomeCliente'])){
        $erros[] = "verifique se seu nome está correto, e se é maior que 2 caracteres!";
    }
    if(!validarCPF($dadosCompras['cpfCliente'])){
        $erros[] = "CPF invalido amigão! tenta de novo!";
    }
    if(!validarCartao($dadosCompras['cartaoCliente'])){
        $erros[] = "Dados da cartão invalido";
    }
    if(!validarCartao($dadosCompras['dataValidadeCartao'])){
        $erros[] = "Validação invalida";
    }
    if(!validarCVV($dadosCompras['cvv'])){
        $erros[] = "Data vencida";
    }
    
    return $erros;
}

?>

<!DOCTYPE html>
<html lang="en">

<?php include "head.php"; 
?>

<body>
    
<?php include "header.php"; 
?>


    <main class="container">
        <section class="row">


<?php

        $errosValidacao = validarCompra($_POST);

        if(count($errosValidacao) > 0):
     ?>


        <div class="col-md-12">
        <!-- Aqui vai exibir erros de cadastro -->

            <ul>
                <?php foreach($errosValidacao as $erro): ?>
                    <li><?php echo $erro; ?></li>
                <?php endforeach; ?>

            </ul>
        
        </div>



            <div class="col md-12">
            
            <div class="alert alert-success" role="alert">
                Olá <?php echo $_POST['nomeCliente']; ?> Parabéns pela sua compra do produto <?php echo $_POST['nomeProduto']; ?>

            </div>

            <?php endif; ?>
            
            </div>

            <div class="col col-12">
            
            <a href="index.php" class="btn btn-primary"> Voltar para a home </a>
            </div>
        </section>
    </main>

    <

</body>
</html>