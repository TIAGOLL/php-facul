<?php
// Crie uma classe base 'Animal' com um método 'emitirSom'.
// Crie duas classes derivadas, 'Cachorro' e 'Gato', que herdam de 'Animal'.
// Sobrescreva o método 'emitirSom' em ambas as classes derivadas para representar o som característico.
// Demonstre o polimorfismo chamando o método comum com objetos de ambas as classes derivadas.
class Animal2
{
    public function emitirSom(){}
}

class Cachorro2 extends Animal2
{
    public function emitirSom(){
        $som = "A";
        for ($i=0; $i < 100; $i++) { 
            $som .= 'uuuuuuuuuuuuu';
        }
        echo $som;
    }
}

class Gato extends Animal2
{
    public function emitirSom(){
        echo 'Miau';
    }
}

$ch = new Cachorro2();
$gt = new Gato();

$ch->emitirSom();
echo '<br>';
$gt->emitirSom();