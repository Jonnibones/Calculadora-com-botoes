<?php

//Requisita o autoload da classe
require_once("config.php");
//inicializa a sessão
session_start();

//Verifica se a variável $_GET(algum dos botões) está definida
if(isset($_GET['num']))
{
  //Verifica se o valor passado via GET é 'c', se for ele esvazia a variável SESSION e redireciona para a página principal
  if($_GET['num'] == 'c')
  {
    unset($_SESSION['num']);
    header("location:index.php");
  }
  else
  {
  //Se o if retornar falso, SESSION['num'] recebe o valor de GET
  $_SESSION['num'][] = $_GET['num'];

  //Verifica se o primeiro valor passado não é numérico, caso verdadeiro esvazia a variável SESSION, esta recebe a string "ERROR" e redireciona para a página principal
  if (is_numeric($_SESSION['num'][0]) == false) 
  {
    unset($_SESSION['num']);
    $_SESSION['num'][] = "ERROR";
  }
  header("location:index.php");
}
}

//Verifica se a variável POST está definida(botão de calcular)
if(isset($_POST['btn_calc']))
{
//A variável $expressao recebe um array com os valores da caixa de texto(input) 
$expressao = str_split($_POST['inp_calc']);

// Dentro do laço foreach existem algumas verificações usadas para separação dos caracteres numerais(números) e não-numerais(operadores) em variáveis do tipo array. 
foreach($expressao as $value)
{
  if (!isset($op))
  {
    if (is_numeric($value)) 
    {
      $numero1[] = $value;
    }
    else
    {
      $op[] = $value;
    }
  }
  else
  {
      if (is_numeric($value))
      {
        $numero2[] = $value;
      }
      else
      {
        $op[] = $value;
      }
  }
}

//Neste bloco após a separação dos caracteres, "setamos" os valores em forma de string nos métodos da classe Calculadora
  $new_calc = new Calculadora();
  $new_calc->setNumero1(intval(implode("", $numero1)));
  $new_calc->setOp(implode("",$op));
  $new_calc->setNumero2(intval(implode("", $numero2)));
  //Esvaziamos a variável
  unset($_SESSION['num']);
  //A variável SESSION recebe o valor da expressão já processada no método Calcular
  $_SESSION['num'][] = $new_calc->Calcular($new_calc->getnumero1(),$new_calc->getOp(),$new_calc->getNumero2());
  //Redireciona para página principal
  header("location:index.php");
}

?>