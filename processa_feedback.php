<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Coleta e sanitiza os dados
    $nome = trim($_POST['nome']);
    $email = trim($_POST['email']);
    $feedback = trim($_POST['feedback']);

    // Validação simples
    if (empty($nome) || empty($email) || empty($feedback)) {
        echo "Por favor, preencha todos os campos.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email inválido.";
        exit;
    }

    // Aqui você poderia salvar em um banco ou enviar por email

    // Redireciona de volta com mensagem de sucesso
    header("Location: index.php?sucesso=true");
    exit;
} else {
    echo "Acesso inválido.";
}
?>
