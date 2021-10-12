<?php

$produto = array();
$qnt = array();
$valor = array();

function add($prd, $quant, $vlr) {
  global $produto, $qnt, $valor;
  array_push($produto, $prd);
  array_push($qnt, $quant);
  array_push($valor, $vlr);
}

// Aqui adiciona
add("banana","1kg", 5);
add("sorvete", 3, 10);
add("bombom", 10, 20);
add("bife", "2kg", 40);
add("queijo","1kg", 42.50);

function liste() {
  global $produto, $qnt, $valor;
  echo "<table>
  <tr>
    <td>Produto</td>
    <td>Quantidade</td>
    <td>Valor R$</td>
  </tr>";
  for($i = 0; $i < count($produto); $i++) {
    echo "<tr><td>$produto[$i]</td><td>$qnt[$i]</td><td>$valor[$i]</td></tr>";
  }
  echo "</table>";
}

liste();
?>