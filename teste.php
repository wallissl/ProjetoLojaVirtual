
<!DOCTYPE html>
<html lang="br">
<?php include "head.php"; 
echo "olá"." ".$_POST['nome']." ".$_POST['sobreNome'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<br>

<form method="POST" action="teste.php">
<input type="text" name="nome">
<input type="text" name="sobreNome">

<button type="submit"> enviar </button> 

</form>
    
</body>
</html>