<html>
 <h3>A mensagem de erro sai asssim que voce preenche os valores e envia </h3>
 <body>
 <form action='ex4.php' method="get">
  <label> Valores a serem somados <label> 
  <label> Valor 1 : <label> 
  <input type="number" name="value1"><br>
  <label> Valor 2 : <label> 
  <input type="number" name="value2"><br>

  <input type="submit">
 </form>
 
 <?php 
  $primeiroValor = $_GET['value1'];
  $segundoValor = $_GET['value2'];
  
  $soma = $primeiroValor + $segundoValor;
  
  echo "Soma: $soma";
 ?>
 </body>
</html>