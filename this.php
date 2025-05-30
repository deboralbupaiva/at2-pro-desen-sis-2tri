<?php

require_once "src/Cliente.php";

$cli = new Cliente;
$cli ->definirNome("Nala");
echo "<br>";
$cli ->definirIdade("30");
echo "<br>";
$cli ->definirEndereco ("Rua B, 456");
echo "<br>";
$cli ->definirTelefone("(41) 88888-8888");
echo "<br>";
$cli ->comprar();
  