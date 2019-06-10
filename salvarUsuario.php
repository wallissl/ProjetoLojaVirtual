<?php
include_once "funcoes.php";
$contadorInputVazio = 0;
foreach($_POST as $item){
    $item == ""?$contadorInputVazio++:0;
}

$itensPost = is_array($_POST)?count($_POST):0;
if($contadorInputVazio == $itensPost){
echo "<h1>VOcê não enviou nenhuma informação sobre o usuario</h1>";
echo '<a class="btn btn-primary" href="cadastroUsuario.php">Voltar para de cadastro!</a>';
exit;
}

$nomeUsuario = $_POST['nomeUsuario'];
$emailUsuario = $_POST['emailUsuario'];
$senhaUsuario = password_hash($_POST['senhaUsuario'],PASSWORD_DEFAULT);
$nivelDeAcesso = $_POST['nivelDeAcesso'];

if(addUsuario($nomeUsuario,$emailUsuario,$senhaUsuario,$nivelDeAcesso)){
    echo '<h1>Usuario cadastrado com sucesso!</h1>';
    echo '<a class="btn btn-primary" href="login.php">Ir para a página de Login!</a>'; }
    else {
        echo '<h1>Erro na hora de salvar! tenta de novo! </h1>';
        echo '<a class="btn btn-primary" href="login.php">Ir para a página de Login!</a>';
    }




?>