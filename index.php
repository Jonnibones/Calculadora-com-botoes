<?php
//Inicia a sessão
session_start();
?>

<!DOCTYPE HTML>
<html lang=”pt-br”>
<head>
<meta charset=”UTF-8”>
<link rel=”stylesheet” type=”text/css” href=”#”>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<title>Calculadora com botões</title>
</head>
<body>

<!--Cabeçalho-->
  <div><h1 class="alert alert-success" style="text-align: center;">Calculadora Básica</h1></div>


<div class="container">
<!--Caixa de texto-->
<div class="container">
<form class="form-control" action="calcula.php" method="POST">
  <input class="form-control" type="text" name="inp_calc" value="
<?php
//Verifica se a variável $_SESSION está definida e imprime o valor na caixa de texto
 if(isset($_SESSION['num'])){
 foreach($_SESSION['num'] as $value){
 echo $value;
 }}?>"><br><br>

 <!--Botão de calcular-->
  <button class="btn btn-outline-success btn-lg" type="submit" name="btn_calc">CALCULAR</button>
  </form>
</div>

<!--Botões com números e operadores passados via GET-->
<div class="container" style="margin-left: 300px;">
  <table>

  <tr>
    <br>
    <td><button class="btn btn-outline-primary btn-lg"><a style="color:black; font-size:70px;" href="calcula.php?num=7">7</a></button></td>
     <td><button class="btn btn-outline-primary btn-lg"><a style="color:black; font-size:70px;"href="calcula.php?num=8">8</a></button></td>
      <td><button class="btn btn-outline-primary btn-lg"><a style="color:black; font-size:70px;"href="calcula.php?num=9">9</a></button></td>
      <td><button class="btn btn-outline-primary btn-lg"><a style="color:black; font-size:70px;"href="calcula.php?num=4">4</a></button></td>
      <td><button class="btn btn-outline-primary btn-lg"><a style="color:black; font-size:70px;"href="calcula.php?num=5">5</a></button></td>
    </tr>

    <tr>
      <td><button class="btn btn-outline-primary btn-lg"><a style="color:black; font-size:70px;"href="calcula.php?num=6">6</a></button></td>
      <td><button class="btn btn-outline-primary btn-lg"><a style="color:black; font-size:70px;"href="calcula.php?num=1">1</a></button></td>
      <td><button class="btn btn-outline-primary btn-lg"><a style="color:black; font-size:70px;"href="calcula.php?num=2">2</a></button></td>
      <td><button class="btn btn-outline-primary btn-lg"><a style="color:black; font-size: 70px;"href="calcula.php?num=3">3</a></button></td>
      <td><button class="btn btn-outline-primary btn-lg"><a style="color:black; font-size:70px;"href="calcula.php?num=0">0</a></button></td>
      </tr>

    <tr>
      <td><button class="btn btn-outline-primary btn-lg"><a style="color:black; font-size:70px;"href="calcula.php?num=-">-</a></button></td>
      <td><button class="btn btn-outline-primary btn-lg"><a style="color:black; font-size:70px;" href="calcula.php?num=/">÷</a></button></td>
      <td><button class="btn btn-outline-primary btn-lg"><a style="color:black; font-size:70px;"href="calcula.php?num=*">×</a></button></td>
      <td><button class="btn btn-outline-primary btn-lg"><a style="color:black; font-size:70px;"href="calcula.php?num=s">+</a></button></td>
      <td><button class="btn btn-outline-primary btn-lg"><a style="color:black; font-size:70px;"href="calcula.php?num=c">C</a></button></td>
    </tr>
  </table>
</div>
</div>
</body>
</html>