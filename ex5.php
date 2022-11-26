<html>
 <h3>A mensagem de erro sai asssim que voce preenche os valores e envia , pois a URL esta vazia </h3>
 <body>
 <form action='ex5.php' method="get">
  <label> Media Aritmética<label> 
  <label> Valor 1 : <label> 
  <input type="number" name="value1"><br>
  <label> Valor 2 : <label> 
  <input type="number" name="value2"><br>
  <label> Valor 3 : <label> 
  <input type="number" name="value3"><br>

  <input type="submit">
 </form>
 
 <?php 
  $primeiroValor = $_GET['value1'];
  $segundoValor = $_GET['value2'];
  $terceiroValor = $_GET['value3'];

  $media = ($primeiroValor + $segundoValor + $terceiroValor)/3;
  
  echo "Media: $media";
 ?>
 </body>
</html>