<?php

Class Usuario
{
    private $pdo;
    public $msgError = "";
    public function conectar($nome, $host, $usuario, $senha)
    {
        global $pdo;
        try {
            $pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
        } catch (PDOException $th) {
            $msgError = $th->getMessage();
            echo $msgError;
        }

    }
    public function cadastrar($nome, $telefone, $email, $senha)
    {
        global $pdo;
        //verificar se ja tem cadastro
        $sql = $pdo->prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
        $sql->bindValue(":e",$email);
        $sql->execute();
        if($sql->rowCount() > 0){
            return false;
        }
        else{
           //se ela não tiver cadastro, vai cadastrar aqui
           $sql = $pdo->prepare("INSERT INTO usuarios (nome, telefone, email, senha) VALUES(:n, :t, :e, :s)");
           $sql->bindValue(":n",$nome);
           $sql->bindValue(":t",$telefone);
           $sql->bindValue(":e",$email);
           $sql->bindValue(":s",md5($senha));
           $sql->execute();
           return true;
        }

    }
    public function logar($email, $senha)
    {
        global $pdo;
        //verificar se o email e a senha estao cadastradas
        $sql = $pdo->prepare("SELECT id FROM usuarios WHERE email = :e AND senha = :s");
        $sql->bindValue(":e",$email);
        $sql->bindValue(":s",md5($senha));
        if($sql->rowCount() > 0)
        { //entrar no sistema
            $dado = $sql->fetch(); 
            session_start();
            $_SESSION['id_usuario'] = $dado['id_usuario'];
            return true; // deu certo essa porra
        }
        else
        {
            return false; // sem cadastro
        }


        //se tiver cadastro vai logar

    }
}

?>