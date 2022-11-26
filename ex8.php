<h3>A mensagem de erro sai asssim que voce preenche os valores e envia , pois a URL esta vazia </h3>
 <body>
 <form action='ex7.php' method="get">
<label>Converter  Celcius para Farenheint </label>
<br> 
<label>Informe a temperatura:</label>
<input type=number name="temperatura"/>
<br> 
  <input type="submit">
 </form>
 
 <?php 

  $temperatura=$_GET['temperatura'];

  $celFah= $temperatura*1.8 +32;

 echo "A temperatura em Celcius e :".$celFah;

 ?>
 </body>
</html>