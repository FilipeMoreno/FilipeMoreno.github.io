<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<title>Safadômetro</title>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
<script defer src="https://use.fontawesome.com/releases/v5.8.1/js/all.js" integrity="sha384-g5uSoOSBd7KkhAMlnQILrecXvzst9TdC09/VM+pjDTCM+1il8RHz5fKANTFFb+gQ" crossorigin="anonymous"></script>
</head>
<body>
<div class="alert alert-sucess alert-dismissible fade show" role="alert">
  <center><strong>Hey!</strong> Esse sistema está em <strong>DESENVOLVIMENTO</strong>. Erros podem acontecer.</center>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="container">
    <center><h1 class="display-4">Safadômetro</h1>
<p class="lead">Preencha com sua data de nascimento (DD/MM/AAAA).</p></center>
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
<hr>
<center><p class="lead">Resultado:</p></center>
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
   echo "<center>Safado(a): <br />$total %</center><br>";
   echo "<center>Santo(a): <br />$anjo %</center>";
}
?>
<hr>
<div class=footer>
<center><i class="fas fa-copyright"></i> Filipe Moreno <i class="fas fa-code"></i> Feito com <i class="fas fa-heart"></i></center><br />
</div>
</body>
</html>
