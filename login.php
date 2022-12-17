<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bolão 2022!</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
  </head>
  <body> 
    <div class="container" id="corpo-form">
      <div class="col-12">
      <h1>Faça o login para acessar suas apostas</h1>
      <form method="POST" action="autenticar.php">
          <input type="email" name="email" placeholder="Usuário">
          <input type="password" name="senha" placeholder="Senha">
          <input type="submit" value="Entrar" href="home.php">
          <a href="cadastrar.php">Ainda não é inscrito?<strong>Cadastre-se</strong>
      </form>
      </div>
    </div>
    
    <?php
    
    
    ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
  <footer class="text-center text-lg-start">
    <!-- Copyright -->
    <div class="text-center p-3">
      © 2020 Copyright:
      <a class="text-dark" href="https://www.fifa.com/fifaplus/en/tournaments/mens/worldcup/qatar2022">Fifa </a>
    </div>
    <!-- Copyright -->
  </footer>
</html>