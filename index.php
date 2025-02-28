<?php
$nome = $_GET["nome"];
define("ANO_ATUAL", 2025);
$ano_nascimento = $_GET["ano"];
$idade = ANO_ATUAL - $ano_nascimento;
echo("Bem vindo $nome <br>");
echo("Voce tem $idade anos.")
?>