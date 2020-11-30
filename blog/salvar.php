<?php
include_once("../servico/Bd.php");

$titulo = $_GET['titulo'];
$corpo = $_GET['corpo'];

if (isset($_GET['id'])) { //atualiza
    $id = $_GET['id'];
    
    $sql = "update blog set postagem= '$titulo', senha='$corpo' where id='$id'";
}else { //inclui
    $sql = "INSERT INTO `blog` (`id`, `titulo`, `corpo`) VALUES (NULL, '$titulo', '$corpo')";
}

$bd = new Bd();

$contador = $bd->exec($sql);

echo "<h1>$contador registro foi incluído/alterado</h1>";

echo "<a href='https://trabalho-felipe.000webhostapp.com/principal.php'> < Voltar </a>";

?>
