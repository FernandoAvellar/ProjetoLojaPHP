<?php
require_once("cabecalho.php");
require_once("banco-produto.php");
require_once("logica-usuario.php");

verificaUsuario();

$nome = $_POST["nome"];
$preco = $_POST["preco"];
$descricao = $_POST["descricao"];
$categoria_id = $_POST["categoria_id"];
$usado = array_key_exists("usado", $_POST) ? "true" : "false";

if(insereProduto($nome, $preco, $descricao, $categoria_id, $usado, $conexao)) { ?>
    <p class="text-success">Produto <?= $nome; ?>, <?= $preco; ?> adicionado com sucesso!</p>
<?php
} else {
    $msg = mysqli_error($conexao); ?>
    <p class="text-danger">O produto <? $nome; ?> não foi adicionado: <?= $msg ?></p>
<?php
    } ?>

<?php include("rodape.php"); ?>