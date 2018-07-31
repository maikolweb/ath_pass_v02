<?php
class Connection
{
    private $numero=1;
    private $numero2=2;


  function __construct()
  {

  }

  public function getNumero(){
    return $this-> numero;
  }
  public function setNumero($numero){
    $this-> numero= $numero;
  }
  public function getNumero2(){
    return $this-> numero2;
  }
  public function setNumero2($numero2){
    $this-> numero2= $numero2;  }

public function suma(){

  $result=$this-> numero + $this-> numero2;
  return $result;
}

}

$objecto= new Connection();

echo 'hola'.$objecto->suma();
