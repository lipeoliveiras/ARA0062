<?php
include_once("../servico/Bd.php");

$login = $_GET['login'];
$senha = $_GET['senha'];

if (isset($_GET['id'])) { //atualiza
    $id = $_GET['id'];
    
    $sql = "update usuario set login= '$login', senha='$senha' where id='$id'";
}else { //inclui
    $sql = "INSERT INTO `usuario` (`id`, `login`, `senha`) VALUES (NULL, '$login', '$senha')";
}


$bd = new Bd();

$contador = $bd->exec($sql);

echo "<h1>$contador registro foi incluído/alterado</h1>";

echo "<a href='consultaUsuario.php'> < Voltar </a>";

?>
