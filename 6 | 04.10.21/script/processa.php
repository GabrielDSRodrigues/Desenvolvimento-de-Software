<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Calculadora PHP</title>
    <meta name='viewport' content='width-device-width'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet'>

  </head>
  <body>
  
    <div class='container'>
      <br>
      <form class='' action='processa.php' method='post'>
        <br>

        <div class='mb-3 fs-1 text-success'>
          <div>CALCULADORA</div>
        </div> 

        <div class='mb-3'>

          <label for='sel' class='form-label'>Escolha o tipo de conta</label>
          <select name='type' class='form-select' id='sel'>
          
          <option value='add'>Adição</option>
          <option value='sub'>Subtração</option>
          <option value='mult'>Multiplicação</option>
          <option value='div'>Divisão</option>
          
          </select>

        </div>

        <div class='mb-3'>

          <label for='n1' class='form-label'>Digite um Número</label>
          <input type='number' name='n1' class='form-control' id='n1'>

        </div>

        <div class='mb-3'>

          <label for='n2' class='form-label'>Digite outro Número</label>
          <input type='text' name='n2' class='form-control' id='n2'>

        </div>
        
        <button type='submit' class='btn btn-primary'>Calcular</button>

      </form>
      <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
  </body>
</html>

<?php

  function r($name) {return $_POST[$name];}

  $type = r('type');
  $n1 = r('n1');
  $n2 = r('n2');


  if($type == 'add') {
    $result = $n1+$n2;
    echo "<div class='alert alert-success' role='alert'> O Resultado é <b>$result</b></div>";
  }

  else

  if($type == 'sub') {
    $result = $n1-$n2;
    echo "<div class='alert alert-success' role='alert'> O Resultado é <b>$result</b></div>";
  }

  else

  if($type == 'mult') {
    $result = $n1*$n2;
    echo "<div class='alert alert-success' role='alert'> O Resultado é <b>$result</b></div>";
  }

  else

  if($type == 'div') {
    $result = $n1/$n2;
    echo "<div class='alert alert-success' role='alert'> O Resultado é <b>$result</b></div>";
  }

?>