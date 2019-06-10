<!DOCTYPE html>
<html lang="en">
<?php include_once "head.php"; ?>

<body>
    <?php include_once "header.php";?>


    <main class="container">
    <section class="row">
        <div class="col-md-6">
            <form action="salvarProduto.php" method="post" enctype="multipart/form-data">

                <!-- Nome produto -->
                <div class="form-group">
                    <label for="nomeProduto">Nome do Produto</label>
                    <input type="text" class="form-control" id="nomeProduto" placeholder="Nome do Produto"
                        name="nomeProduto">
                </div>
                <!-- Preço do produto -->
                <div class="form-group">
                    <label for="precoProduto">Preço do Produto</label>
                    <input type="number" step="any" class="form-control" id="precoProduto"
                        placeholder="Preço do Produto" name="precoProduto">
                </div>
                <!-- Descrição do produto -->
                <div class="form-group">
                    <label for="descProduto">Descrição do produto</label>
                    <textarea class="form-control" name="descProduto" id="descProduto"></textarea>
                </div>

                <!-- Imagem do Produto -->
                <div class="form-group">
                    <label for="imgProduto">Imagem do Produto</label>
                    <input type="file" name="arquivo" id="imgProduto">
                </div>

                <button class="btn btn-success" type="submit">Finalizar cadastro</button>
            </form>
        </div>
    </section>
    </main>



</body>

</html>