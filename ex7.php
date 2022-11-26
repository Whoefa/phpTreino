<h3>A mensagem de erro sai asssim que voce preenche os valores e envia , pois a URL esta vazia </h3>
 <body>
 <form action='ex7.php' method="get">
<label>Converter  Farenheint para Celcius </label>
<br> 
<label>Informe a temperatura:</label>
<input type=number name="temperatura"/>
<br> 
  <input type="submit">
 </form>
 
 <?php 

  $temperatura=$_GET['temperatura'];

  $fahCel = (5*($temperatura-32)/9);

 echo "A temperatura em Celcius e :".$fahCel;

 ?>
 </body>
</html>