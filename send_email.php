<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars($_POST['nome']);
    $email = htmlspecialchars($_POST['email']);
    $mensagem = htmlspecialchars($_POST['mensagem']);

    // Defina o email de destino (onde você quer receber o e-mail)
    $to = "werysleyk.ufrn@gmail.com";
    $subject = "Mensagem do Site de Foguetes";
    
    // Conteúdo do e-mail
    $body = "Nome: $nome\nEmail: $email\n\nMensagem:\n$mensagem";

    // Cabeçalhos adicionais
    $headers = "From: $email";

    // Envio do e-mail
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar mensagem.";
    }
}
?>
