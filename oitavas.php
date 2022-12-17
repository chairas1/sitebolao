<?php include "config.php"; ?>
<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/jogos.css">
    <title>Hello, world!</title>
</head>

<body>
        
    <div class="buttons">
        
        <?php include "button.php" ?>
    
        </div>
    <div class="partidas">
            <?php
                $sql = "SELECT * FROM dados_jogos where tipo like 'OITAVAS%'";
                $query = $mysqli->query($sql);
                $i = 1;
                $j = 2;
                while ($dados = $query->fetch_array()){
            ?>
            <div class="jogos">
                <div class="info">
                   <h4> <?php echo $dados['tipo']; ?>  </h4>
                   <h4> <?php echo $dados['rodada']; ?> </h4>
                </div> 
                <div class="rodada">
                    <div class="timeA">
                       <div class="dados">
                            <img src="TIMES/<?php echo $dados['timea']; ?>.png">
                            <h3><?php echo $dados['timea']; ?></h3>
                       </div>
                       <input type="text" class="form-control" maxlength="1" width="20px" name="cp<?php echo $i; ?>">
                    </div>
                    <span>X</span>
                    <div class="timeB">
                        <input type="text" name="cp<?php echo $j; ?>" class="form-control" maxlength="1" width="20px">
                        <div class="dados">
                            <img src="TIMES/<?php echo $dados['timeb']; ?>.png"><br>
                            <h3><?php echo $dados['timeb']; ?></h3>
                        </div>
                    </div>
                </div>
                <div class="data">
                        <h4><?php echo $dados['data']; ?> </h4> 
                        <h4><?php echo $dados['horario']; ?> </h4>
                </div>
                <div class="button-aposta" id="aposta">
                    <button type="submit" class="btn btn">Apostar</button>
                </div>
            </div>
            <?php $i++;$j++;} ?>
        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>