<?php
    require_once 'CLASSES/usuarios.php';
    $u = new Usuario;

?>
<!doctype html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
  </head>
  <body id="fundo">
  <div id="corpo-form">
    <h1>Login</h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome Completo" maxlength="100">
        <input type="text" name="telefone" placeholder="Telefone" maxlength="15">
        <input type="email" name="email" placeholder="E-mail" maxlength="40">
        <input type="password" name="senha" placeholder="Senha" maxlength="15">
        <input type="password" name="confSenha" placeholder="Confirmar Senha">
        <input type="submit" value="Finalizar cadastro">
    </form>
    </div>
<?php
// verificar se clicou no botao
if(isset($_POST['nome']))
{

    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha = addslashes($_POST['senha']);
    $confirmarSenha = addslashes($_POST['confSenha']);
    //olhando se preencheu tudo
    if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha))
    {
        $u->conectar("projeto_login", "localhost", "root","");
        if($u->msgError == "")
        {
            if($senha == $confirmarSenha)
            {
                if($u->cadastrar($nome, $telefone, $email, $senha))
                {
                    echo "Cadastrado com sucesso, Faça o login";
                }
                else{
                    echo "Ops, você já tem cadastro aqui, Faça o login";
                }
            }else
            {
                echo "Digite a mesma senha.";
            }
            

        }else
        {
            echo "Erro:".$u->msgError;
        }

    }else
    {
        echo "Preencha todos os campos";
    }


}



?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>