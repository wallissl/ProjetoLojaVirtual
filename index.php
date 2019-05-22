<!DOCTYPE html>
<html lang="br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h1>
    <?php 
    
    $nome = "Wallis";
    
        if($nome == "Wallis") {
            var_dump($nome."<br>");
        } else {
            echo "Não é Eu";
        }

        for($i=0; $i <5; $i++){
            echo "Olá $nome"."<br>";
        }
    
    ?>
    
    
    </h1>


</body>
</html>