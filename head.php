<?php
include "funcoes.php";
$usuario = logarUsuario("Wallis Silva", 1);
//$usuario = "";
$jsonProdutos = file_get_contents('Produtos.json');
$produtos = json_decode($jsonProdutos, true);
$produtos = $produtos['Produtos'];
$categorias = ["Cursos", "Tutoriais", "Artigos", "Forum", "Códigos"];
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja Virtual</title>
    <!-- -->
    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>