<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';
?>

<h1>Produtos</h1>

<div class="container">
    <div class="row">
        <?php
        // laço de repetição
        foreach ($produtos as $key => $value) {
        
        ?>    
        <div class="card mr-3 mt-3" style="width: 18rem;">
            <img src="./content/<?php echo $value['imagem']?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $value['nome']?></h5>
                <p class="card-text"><?php echo $value['descricao']?></p>
                <a href="produto-detalhe.php?id=<?php echo $key?>" class="btn btn-primary">Detalhe</a>
            </div>
        </div>
        <?php
        }
        ?>


    </div>
</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>