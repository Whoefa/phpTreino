<h3>A mensagem de erro sai asssim que voce preenche os valores e envia , pois a URL esta vazia </h3>
 <body>
 <form action='ex6.php' method="get">
<label>Informe seu nome para saber se foi aprovado ou nao</label>
<br> 
<label>Informe seu nome</label>
<input type=text name="Nome"/>
<br> 
  <label> Media Aritmética<label>
  <br> 
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
  $nome=$_GET['Nome'];

  $media = ($primeiroValor + $segundoValor + $terceiroValor)/3;

  if ($media>=6) {
    echo $nome."<br> Aprovado".$media;
  }
  else{
    echo $nome."<br> Reprovado"."$media";
  }

 ?>
 </body>
</html>