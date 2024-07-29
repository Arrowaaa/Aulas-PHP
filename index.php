<?php
//(composer require phpmailer/phpmailer) <- Comando para o terminal
//PHPMailer()
//Importanto classe do PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//carregando arquivo do composer
require 'vendor/autoload.php';

//Criando instancia do PHPMailer
$mail = new PHPMailer(true);

try{
    //Configuração do servidor
    $mail->isSMTP();                                         //Usando o SMTP
    $mail->Host       = 'smtp-mail.outlook.com';            //Defina o servidor SMTP para enviar
    $mail->SMTPAuth   = true;                              //Habilitar Altentificação SMTP 
    $mail->Username   = 'ventqui@outlook.com';            //Nome do usuario SMTP 
    $mail->Password   = 'Aluno123';                      //Senha do SMTP 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; //Protocolo de altentificação
    $mail->Port  = 587;                           //TCP porta para conectar; use 587 se você configurou `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet = 'UTF-8';
    

    //Destinatarios
    $mail->setFrom('ventqui@outlook.com', 'Vent Qui');
    $mail->addAddress('policebox2@hotmail.com', 'PoliceBox');     //Adiciona quem irá receber
 
    // $mail->addReplyTo('info@example.com', 'Information');      // Adiciona uma replica
    // $mail->addCC('cc@example.com');    // Adiciona e manda uma copia
  

    //Conteúdo do Email
    $mail->isHTML(true);                                  //Envia um email com formato HTML
    $mail->Subject = 'Confirmação de Cadastro';
    $mail->Body    = 'Venho confirma que o seu cadastro foi efetuado com <strong>Sucesso</strong>!!';
    $mail->AltBody = 'Texto alternativo do Email';
    
    $mail->send();
    echo "Está Funcionando!!";
} catch (Exception $e) {
    echo "Erro ao enviar o E-mail!! {$mail->ErrorInfo}";
}
