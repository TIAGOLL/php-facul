<?php
// Crie uma trait chamada 'Mensagens' que define um método 'enviarMensagem'.
// Crie duas classes, 'EmailSender' e 'SMSSender', que utilizam a trait 'Mensagens'.
// Demonstre a utilização da trait em ambas as classes.

trait Mensagens
{
  public function enviarMensagem()
  {
    echo "<br>Enviando...<br>";
  }
}

class EmailSender
{
  use Mensagens;
}

class SMSSender
{
  use Mensagens;
}

$email = new EmailSender();
$sms = new SMSSender();

echo $email->enviarMensagem();
echo $sms->enviarMensagem();
