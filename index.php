<!DOCTYPE html>

<?php

  session_start();

  echo $_SESSION['autenticado'];

?>

<html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Help Desk</title>

      <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <link rel="stylesheet" href="estilo.css">

    </head>

    <body>
      <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
          <img src="logo.png" width="30" height="30" class="d-inline-block align-top" alt="">
          App Help Desk
        </a>
     </nav>
      <div class="espacamento">
        <h1>Acesso</h1>      
     </div>
     <div class="container">
        <div class="row">
          <div class="card-login">
            <div class="card">
             <div class="card-header">
               Login
             </div>
              <div class="card-body">
                <form action="aprovar_login.php" method="post">
                  <div class="form-group">
                    <input name="email" type="email" class="form-control" placeholder="E-mail">
                 </div>
                 <div class="form-group">
                   <input name="senha" type="password" class="form-control" placeholder="Senha">
                 </div>

                 <?php if(isset($_GET['login']) && $_GET['login'] == 'error') { ?>
                  
                  <div class="text-danger">
                    User or password invalid(s).
                  </div>

                  <?php } ?>

                 <button class="btn btn-lg btn-info btn-block" type="submit">Entrar</button>
               </form>
             </div>
           </div>
          </div>
        </div>
     </div>
      <div class="registro-login">
        <p class="registro-login">Não possui uma conta?
        <br>  
        <a href="registro.php">Registre-se</a>
        </p>
      </div>
      <div style="display: flex; justify-content: center; align-items: center; margin: -30px 0 0 0">
      </div>
   </body>
</html>