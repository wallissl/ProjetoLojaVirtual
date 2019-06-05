

<!--Aulas sobre arryas - FIM-->

<!DOCTYPE html>
<html lang="br">
<?php include "head.php"; 

?>



<body>

    <?php include "header.php"; ?>
        <main class="container mt-5">
            <section class="row">

            <!--Coluna para segurar o card-->

                <?php foreach($produtos as $chave=>$value){ ?>

                    <div class="col-md-4 mt-3">

                        <div class="card" style="width: 18rem;">
                        <img src="<?php echo $value["img"] ?>" class="card-img-top" alt="...">

                            <div class="card-body">
                                <h5 class="card-title"><?php echo $value["nome"]; ?> </h5>
                                <p class="card-text"><?php echo $value["descricao"]; ?></p>
                                <h4 class="text-success">R$<?php echo $value["preco"]; ?></h4>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<?php echo $produto['id']; ?>">
                                Comprar
                                </button>

                            </div>

                        </div>

                    </div>

                <?php } ?>
            
            </section>

        </main>

        <!-- Button trigger modal -->


        <?php foreach($produtos as $chave=>$produto): ?>
        <!-- Modal -->
        <div class="modal fade" id="<?php echo $produto['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Produto: <?php echo $produto["nome"];?></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">
                <form method="POST" action="sucesso.php">  
                    <input type="text" name="nomeProduto" value="<?php echo $produto["nome"]?>" hidden> 
                        <div class="form-group">
                            <input type="text" name="nomeCliente" placeholder="Nome completo">
                        </div>

                        <div class="form-group">
                            <input type="number" name="cpfCliente" placeholder="CPF">
                        </div>

                        <div class="form-group">
                            <input type="number" name="cartaoCliente" placeholder="Cartão de Crédito">
                        </div>
                    
                        <div class="form-group">
                            <input type="date" name="dataValidadeCartao" placeholder="Data de validade do cartão">
                        </div>

                        <div class="form-group">
                            <input type="number" maxlength="3" name="cvv" placeholder="Código do cartão" >
                        </div>


                

            ...
        </div>
            <div class="modal-footer">
                <div class="text-primary">Preço total: R$ <?php echo $produto["preco"]; ?></div>

                <button type="submit" class="btn btn-success">Finalizar Compra</button>
            </div>
        </div>
        </form>
    </div>
    </div>

    
    <?php endforeach ?>




        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    


</body>
</html>