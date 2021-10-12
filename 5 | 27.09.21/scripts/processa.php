<?php
  function r($name) {return $_POST[$name];}

  $nome = r('nome');
  $sobrenome = r('sobrenome');
  $idade = r('idade');
  $email = r('email');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Resposta do processamento PHP</title>
    <meta name='viewport' content='width-device-width'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet'>

  </head>
  <body>
  
    <div class='container bg-primary text-light fs-2'>
      <?php
        echo "Olá $nome $sobrenome. Sua idade é de $idade anos. Você passou no processo seletivo e iremos entrar em contato no e-mail $email";
      ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
  </body>
</html>