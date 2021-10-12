<!DOCTYPE html>
<html>
  <head>
    <meta charset='utf-8'>
    <title>Formulário PHP</title>
    <meta name='viewport' content='width-device-width'>
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css' rel='stylesheet'>

  </head>
  <body>
  
    <div class='container bg-warning'>
      <br>
      <form class='' action='scripts/processa.php' method='post'>
        <br>

        <div class='mb-3 fs-1 text-success'>
          <div>Formulário WEB</div>
        </div> 

        <div class='mb-3'>

          <label for='nome' class='form-label'>Nome</label>
          <input type='text' name='nome' class='form-control' id='nome'>

        </div>

        <div class='mb-3'>

          <label for='sobrenome' class='form-label'>Sobrenome</label>
          <input type='text' name='sobrenome' class='form-control' id='sobrenome'>

        </div>
        
        <div class='mb-3'>

          <label for='idade' class='form-label'>Idade</label>
          <input type='number' name='idade' class='form-control' id='idade'>

        </div>
        
        <div class='mb-3'>

          <label for='email' class='form-label'>Email</label>
          <input type='email' name='email' class='form-control' id='email'>

        </div>

        <button type='submit' class='btn btn-primary'>Processar</button>

      </form>
      <br>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    
  </body>
</html>