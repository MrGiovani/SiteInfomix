<?php
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'src/PHPMailer.php';
    require 'src/SMTP.php';
    require 'src/Exception.php';

    if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['mensagem']) && !empty($_POST['mensagem'])) {
        $email = $_POST['email'];
        $mensagem = $_POST['mensagem'] . '<br><br>E-mail de quem entrou em contato: ' . $email;
        $nome = $_POST['nome'];
        try {
            $mail = new PHPMailer;

            $mail->SMTPDebug = 2;
            $mail->isSMTP();
            $mail->Host = 'smtp.gmail.com';
            $mail->SMTPAuth = true;
            $mail->SMTPSecure = 'tls';
            $mail->Username = 'paulapauzuda@gmail.com';
            $mail->Password = 'meupaunatuamao';
            $mail->Port = 587;

            $mail->setFrom($email, $nome);
            $mail->addAddress('paulapauzuda@gmail.com');

            $mail->isHTML(true);

            $mail->Subject = 'Contato via website';
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
