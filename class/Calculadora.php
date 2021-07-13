<?php

//Classe
class Calculadora{

//Atributos
  private $numero1;
  private $op;
  private $numero2;

//Métodos Getters e Setters
  public function getNumero1()
  {
    return $this->numero1;
  }
  public function setNumero1($value)
  {
    $this->numero1 = $value;
  }
  public function getNumero2()
  {
    return $this->numero2;
  }
  public function setNumero2($value)
  {
    $this->numero2 = $value;
  }
  public function getOp()
  {
    return $this->op;
  }
  public function setOp($value)
  {
    $this->op = $value;
  }

  //Método responsável por calcular a expressão
  public function Calcular($num1, $op, $num2)
  {  
    //Verifica se o comprimento do operador é maior que 1. Caso verdadeiro a variável $result recebe "ERROR"
    if (strlen($this->op) > 1) 
    {
      $result = "ERROR";
    }
    //Caso contrário a expressão é calculada e retornada na variável $result
    else
    {
      switch($this->op)
      {
        case '/' :
          $result = $this->numero1/$this->numero2;
          break;
        case 's' :
          $result = $this->numero1+$this->numero2;
          break;
        case '-' :
          $result = $this->numero1-$this->numero2;
          break;
        case '*' :
          $result = $this->numero1*$this->numero2;
          break;
      }
    }
      return $result;
    }
    
}//fim da classe


?>