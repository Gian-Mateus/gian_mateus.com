<?php
    if (!empty($_POST['nome']) && !empty($_POST['email']) && !empty($_POST['mensagem'])) {
        $to      = 'gian.m.silver@gmail.com';
        $subject = 'Contato do Site com PHP';
        $message = 'hello';
        $headers = 'From: contato@gian.com' . "\r\n" .
            'Reply-To: contato@gian.com' . "\r\n" .
            'X-Mailer: PHP/' . phpversion();

        if(mail($to, $subject, $message, $headers)){
            echo json_encode(["status" => "success", "message" => "Dados enviados com sucesso!"]);
        } else{
            echo json_encode(["status" => "erro", "message" => "Não foi possível enviar e-mail."]);
        };
    } else{
        echo json_encode(["status" => "erro", "message" => "Nenhum dado foi enviado."]);
    }
?>