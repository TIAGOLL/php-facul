<?php
// Defina uma classe base 'Veiculo' com propriedades como 'marca' e 'modelo'.
// Crie duas classes derivadas, 'Carro' e 'Moto', que herdam de 'Veiculo'.
// Implemente métodos específicos para cada classe e um método comum para exibir informações gerais.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.

class Veiculo
{
  protected $marca;
  protected $modelo;

  public function __construct($marca, $modelo)
  {
    $this->marca = $marca;
    $this->modelo = $modelo;
  }

  public function getInfo()
  {
    return "Marca: " . $this->marca . "<br>" . "Modelo: " . $this->modelo;
  }
}

class Moto extends Veiculo
{
  public function __construct($marca, $modelo)
  {
    $this->marca = $marca;
    $this->modelo = $modelo;
  }

  public function Empinar()
  {
    echo "<br>Empinando<br>";
  }
}
class Carro extends Veiculo
{
  public function __construct($marca, $modelo)
  {
    $this->marca = $marca;
    $this->modelo = $modelo;
  }

  public function AbrirPorta()
  {
    echo "<br>Abrindo a porta<br>";
  }
}

$carro = new Carro("Chevrolet", "Strada");
$moto = new Moto("Yamaha", "R3 Monster ABS");

echo $carro->getInfo();
echo $carro->AbrirPorta();

echo "<br><br>";

echo $moto->getInfo();
echo $moto->Empinar();
