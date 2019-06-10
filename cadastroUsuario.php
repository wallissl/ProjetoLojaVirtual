<!DOCTYPE html>
<html lang="br">
<?php include_once "head.php"; ?>

<body>
    <?php include_once "header.php";?>


    <main class="container">
    <section class="row">
        <div class="col-md-6">
            <form action="salvarUsuario.php" method="post" enctype="multipart/form-data">

                <!-- Nome usuario -->
                <div class="form-group">
                    <label for="nomeUsuario">Nome do Usuario</label>
                    <input type="text" class="form-control" id="nomeUsurio" placeholder="Nome do Usuario"
                        name="nomeUsuario">
                </div>

                 <div class="form-group">
                    <label for="emailUsuario">Email</label>
                    <input type="email" class="form-control" id="emailUsurio" placeholder="Email"
                        name="emailUsuario">
                </div>

                 <div class="form-group">
                    <label for="senhaUsuario">Senha do Usuario</label>
                    <input type="password" class="form-control" id="senhaUsurio" placeholder="Senha do Usuario"
                        name="senhaUsuario">
                </div>

                

                <div class="form-group">
                    <label for="nivelDeAcesso">Nivel de Acesso</label>
                    <select name="nivelDeAcesso" id="niveldeAcesso" class="form-control">
                    <option selected disable> selecione o nivel! </option>
                        <option value="0">Administrador </option>
                        <option value="1">Usuario </option>
                    </select>
                    
                </div>









                <button class="btn btn-success" type="submit">Finalizar cadastro</button>
            </form>
        </div>
    </section>
    </main>



</body>

</html>