<?php
// Crie duas traits, 'LogErro' e 'LogInfo', ambas com um método 'registrarLog'.
// Em seguida, crie uma classe 'Registro' que utiliza ambas as traits.
// Demonstre o uso da classe e resolva possíveis conflitos de métodos.

trait LogErro{
  public static function registrarLog(){
      echo "Falha na autenticacao!";
  }
}

trait LogInfo{
  public static function registrarLog(){
      echo "Logado com sucesso!";
  }
}

class Registro{
  public function login($valida){
      if($valida == true){
          LogInfo::registrarLog();
      }else if($valida == false){
          LogErro::registrarLog();
      }
  }
}

$registro = new Registro();
$registro->login(false);