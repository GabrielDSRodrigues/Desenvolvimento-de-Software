<?

  function minhaFuncao() {
    static $a = 0;
    echo $a;
    $a++;
  }
  
  minhaFuncao();
  minhaFuncao();
  minhaFuncao();

?>