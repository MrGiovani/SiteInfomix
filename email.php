<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'src/PHPMailer.php';
    require 'src/SMTP.php';
    require 'src/Exception.php';

    if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'] . '<br><br>E-mail do cliente que entrou em contato: ' . $email . '<br><br>Esta é uma mensagem automática. Por favor, não a responda, direcione a resposta ao email do cliente.'
        $nome = $_POST['nome'];
        try {
            $mail = new PHPMailer;

            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = 'mail.figdigital.com.br';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Username = 'no-reply@figdigital.com.br';
            $mail->Password = 'semsenha';
            $mail->Port = 587;

            $mail->setFrom($email, $nome);
            $mail->addAddress('diogo@infomixonline.com');

            $mail->isHTML(true);

            $mail->Subject = 'CONTATO VIA WEBSITE';
            $mail->Body    = nl2br($mensagem);
            $mail->AltBody = nl2br(strip_tags($mensagem));

            if(!$mail->send()) {
                echo 'Não foi possível enviar a mensagem.<br>';
                echo 'Erro: ' . $mail->ErrorInfo;
            } else {
                echo "<script>window.location.replace('index.php?enviado');</script>";
            }
        } catch (Exception $e) {
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    }
?>
