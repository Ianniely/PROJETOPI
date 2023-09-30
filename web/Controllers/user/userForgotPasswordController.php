<?php 
    use sql\Connection;
    use web\Models\UserModel;
    use PHPMailer\PHPMailer;
    use PHPMailer\SMTP;
    use PHPMailer\Exception;
    
     if(!empty($_POST['email'])) {

        $emailuser = $_POST['email'];

        $user = new UserModel(Connection::getInstance());
        $data = $user->find($emailuser);

        if($data) {
            $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ!@#$%^&*()';
            $password = '';
            $length = 8;

            for ($i = 0; $i < $length; $i++) {
                $index = random_int(0, strlen($characters) - 1);
                $password .= $characters[$index];
            }

            $mail = new PHPMailer(true);
            try {
                $mail->SMTPDebug = SMTP::DEBUG_OFF;
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'inspirernoficial@gmail.com';
                $mail->Password = 'hikyfwiocnbqjtsz';
                $mail->Port = 587;
        
                // Destinatário
                $mail->setFrom('inspirernoficial@gmail.com');
                $mail->addAddress($emailuser);
        
                // Conteúdo do e-mail
                $mail->isHTML(true);
                $mail->Subject = 'Nova Senha';
                $mail->Body = '
                                <html>
                                <head>
                                    <title>Redefinição de Senha</title>
                                </head>
                                <body>
                                    <p>Olá!</p>
                                    <p>Recebemos uma solicitação para redefinir sua senha. Sua nova senha é:</p>
                                    <p><strong>' . $password . '</strong></p>
                                    <p>Por favor, faça o login com esta nova senha e altere-a para uma senha mais segura.</p>
                                    <p>Obrigado!</p>
                                </body>
                                </html>';
        
                // Enviar o e-mail
                $mail->send();
                $result = true;
                $user->updatePassword(password_hash($password, PASSWORD_ARGON2I), $data['cli_codigo'], $data['cli_email']);
                require 'web/Views/forgotPassword.php';
            } catch (Exception $e) {
                echo 'Houve um erro ao enviar o e-mail: ' . $mail->ErrorInfo;
            }

        } else {
            $send = true;
            require 'web/Views/auth/forgotPassword.php';
        }

     } else {
        require 'web/Views/auth/forgotPassword.php';
     }