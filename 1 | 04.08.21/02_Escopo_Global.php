<?

  $x = 55; // VAriável Global
  
  function algumaFun() {
  	// neste caso, x é local
  	$x = 5;
  	echo '<p>Variável x dentro da função é:'.$x.'</p>';
  }
  algumafun();
  
  echo '<p>Variável x fora da função é:'.$x.'</p>';

?>