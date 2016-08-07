<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Calculadora</title>
</head>
 
<body>
<h1 align="center">Outras formas de calcular</h1>
<h4 align="center">Simples calculadora</h4>
<?
   $valor1 = isset($_POST["a"]) ? $_POST["a"] : '';
   $valor2 = isset($_POST["b"]) ? $_POST["b"] : '';
?>


<form title="Formulário Teste" id="formteste" name="formteste" action="" method="post">
   Digite o primeiro número : <input name="a" type="number" value="<? echo $valor1 ?>"/>
   Digite o segundo número  : <input name="b" type="number" value="<? echo $valor2 ?>"/>
   <br /><br />
   Selecione uma operação:<br />
   <input name="operacao" type="radio" value="Soma" />Adição<br />
   <input name="operacao" type="radio" value="Subtração" />Subtração<br />
   <input name="operacao" type="radio" value="Multiplicação" />Multiplicação<br />
   <input name="operacao" type="radio" value="Divisão" />Divisão
   <input type="hidden" name="oculto" value="efetuar"/>
   <br /><br/>
   <input name="calcular" type="submit" value="Calcular"/>
   <input name="limpar" type="reset" value="Limpar"  onclick="javascript:window.location.reload();"/>
   <br /><br />
</form>
</body>
</table>
 
<?php
if ($_POST && $_POST["oculto"] == "efetuar"){
   $valor1     = $_POST["a"];
   $valor2     = $_POST["b"];
   $sinal = $_POST["operacao"];
   switch ($sinal){
      case $sinal == "Soma":
   $total = $valor1 + $valor2;
   break;
      case $sinal == "Subtração":
   $total = $valor1 - $valor2;
   break;
      case $sinal == "Multiplicação":
   $total = $valor1 * $valor2;
   break;
      case $sinal == "Divisão":
   $total = $valor1 / $valor2;
   break;
   }
   echo "O resultado da operação: ".$total;
   if ($valor1> $valor2){
      echo "<br/><br/>O primeiro valor é > que o segundo.";
   }
   elseif ($valor1 < $valor2){
      echo "<br/><br/>O segundo valor é < que o segundo.";
   }
   else{
      echo "<br/><br/>Os valores são idênticos.";
   }
}
?>
</html>
