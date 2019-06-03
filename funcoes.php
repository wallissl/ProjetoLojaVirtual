<?php

function logarUsuario ($nome, $nivelDeAcesso) {

$usuario = ["logado"=>true,"nome"=>$nome, "nivelAcesso"=>$nivelDeAcesso];
return $usuario; 
}

function addProduto ($nome,$descricao,$preco, $img, $produtos){
$novoProduto = ['nome' =>$nome, 'descricao'=>$descricao, 'preco'=>$preco, 'img' =>$img];
$chave = count($produtos) + 1;
$produtos["produto$chave"] = $novoProduto;
return $produtos;
}

function validarNome($nome){
    return strlen($nome) >= 3;
}

function validarCPF($cpf){
    return strlen($cpf) == 11;
}

function validarCartao($nrnCartao){
    return strlen($nrnCartao) == 16;
}

function validarDataValidade($dataValidade){
    return $dataValidade > date('y-m-d');
}

function validarCVV($cvv) {
    return strlen($cvv) == 3;
}