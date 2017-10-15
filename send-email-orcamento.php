<?php

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$data_festa = $_POST['data-festa'];
$endereco = $_POST['endereco'];
$qtd_adulto = $_POST['qtd-adulto'];
$qtd_crianca = $_POST['qtd_crianca'];
$lanches = $_POST['lanches-para-festa'];
$mensagem = $_POST['mensagem'];
$detalhes_do_form = $_POST['detalhes-do-form'];

// try
// {
//     $DT = new DateTime( 'now', new DateTimeZone( 'America/Sao_Paulo') );
//     $data_envio = $DT->format( "d/m/Y H:i:s" );
// }
// catch( Exception $e )
// {
//     echo 'Erro ao instanciar objeto.';
//     echo $e->getMessage();
//     exit();
// }
//



// Compo E-mail
  $arquivo = "
  <style type='text/css'>
  table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
  }

  td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
  }

  tr:nth-child(even) {
      background-color: #dddddd;
  </style>
  <html>




    <table>
    <table width='510' border='1' cellpadding='1' cellspacing='1'>
    <tr>
      <th>Nome</th>
      <th>$nome</th>
    <tr>
    <tr>
      <th>Email</th>
      <th>$email</th>
    </tr>
    <tr>
      <th>Telefone</th>
      <th>$telefone</th>
    </tr>
    <tr>
      <th>Data da Festa</th>
      <th>$data_festa</th>
    </tr>
    <tr>
      <th>Endereço</th>
      <th>$endereco</th>
    </tr>
    <tr>
      <th>Quantidade de Adultos</th>
      <th>$qtd_adulto</th>
    </tr>
    <tr>
      <th>Quantidade de Crianças</th>
      <th>$qtd_crianca</th>
    </tr>
    <tr>
      <th>Lanches</th>
      <th>$lanches</th>
    </tr>
    <tr>
      <th>Mensagem</th>
      <th>$mensagem</th>
    </tr>
    </table>
  </html>
  ";

  // emails para quem será enviado o formulário
    $emailenviar = "contato@royalleeventos.com.br";
    $destino = $emailenviar;
    $assunto = "Contato pelo Site Royalle Eventos- $detalhes_do_form";

    // É necessário indicar que o formato do e-mail é html
    $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: '.$email;
    //$headers .= "Bcc: $EmailPadrao\r\n";

    $enviaremail = mail($destino, $assunto, $arquivo, $headers);
    if($enviaremail){
    echo "true";
    } else {
    echo "false";
    }
