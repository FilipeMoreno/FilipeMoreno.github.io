<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Safadômetro</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
	<script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="msg-erro">
  <center><strong>Hey!</strong> Esse sistema está em <strong>DESENVOLVIMENTO</strong>. </br>Erros podem acontecer.</center>
</div>
<div id="formulario">
    <h1>Safadômetro<hr></h1></hr>
<center><p>Preencha com sua data de nascimento (DD/MM/AAAA).</p></center>
<form title="safadometro" id="safadometro" name="formteste" action="" method="post">
  <center><input name="a" class="form-control" style="width:80px;" placeholder="Dia" type="number" value="<? echo $a ?>"/><br /></center>
  <center><input name="b" class="form-control" style="width:80px;" placeholder="Mês" type="number" value="<? echo $b ?>"/><br /></center>
  <center><input name="c" class="form-control" style="width:80px;" placeholder="Ano" type="number" value="<? echo $c ?>"/></center>
   <br />
   <center> <input name="calcular" class="btn btn-outline-dark" type="submit" value="Ver Resultado"/></center>
   <input type="hidden" name="oculto" value="efetuar"/>
   <br />
</form>
</div>
<div id="formulario">
<h1>Resultado:</h1>
<?php
if ($_POST && $_POST["oculto"] == "efetuar"){
   $a     = $_POST["a"];
   $b     = $_POST["b"];
   $c     = $_POST["c"];
   $sinal = $_POST["oculto"];
   switch ($sinal){
      case $sinal == "efetuar":
	$total = $b+($c/1000)*(50-$a);
	$anjo = 100 - ($b +($c/1000)*(50-$a));
	break;
   }
   echo "<center><h3>Safado(a): <br />$total %</center><br></h3>";
   echo "<center><h3>Santo(a): <br />$anjo %</center><br></h3>";
}
?>
</div>
<div class=footer>
<center><i class="fas fa-copyright"></i> Filipe Moreno <i class="fas fa-code"></i> Feito com <i class="fas fa-heart"></i></center><br />
</div>
</body>
</html>
