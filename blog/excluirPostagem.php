<?php
include_once("../servico/Bd.php");

$id = $_GET['id'];

$sql = "delete from blog where id = '$id'";

$bd= new Bd();

$contador = $bd->exec($sql);

echo "<h1> $contador registro foi excluído</h1>";
echo "<a href='https://trabalho-felipe.000webhostapp.com/principal.php'> < Voltar </a>";


?>