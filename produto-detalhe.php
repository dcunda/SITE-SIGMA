<?php
// include do footer
include_once './includes/_dados.php';
include_once './includes/_head.php';
include_once './includes/_header.php';

$id = $_GET ['id'];

?>

<h1>Produto</h1>

<div class="detalhe">
    <h3><?php echo $produtos[$id]['nome'];?></h3>
    <p><?php echo $produtos [$id]['descricao']?></p>
    <img src="./content/<?php echo $produtos [$id]['imagem']?>">
    <h2>R$ <?php echo $produtos [$id]['preco']?></h2>

</div>

<div class="row">
    <div class="col">Voltar</div>
    <div class="col">Comprar</div>


</div>

<?php
// include do footer
include_once './includes/_footer.php';
?>