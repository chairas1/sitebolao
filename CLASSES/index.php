<?php
include "config.php";
$sql = "SELECT * FROM dados_jogos WHERE rodada = '1 RODADA' AND status_jogos = 'ABERTO'";
$query = $mysql->query($sql);
$a = 1;
while ($dados = $query->fetch_array()){
?>
<input type="hidden" name="jogo"<?php echo $a; ?> value="<?php echo $dados ['id'];>?

