<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $feedback = $_POST["feedback"];

    // Aqui você pode salvar os dados (em arquivo ou banco de dados)
    // Exemplo de salvar em um arquivo:
    /*
    $arquivo = fopen("feedbacks.txt", "a");
    fwrite($arquivo, "Nome: $nome | Email: $email | Feedback: $feedback\n");
    fclose($arquivo);
    */

    // Redireciona de volta para a página principal com sucesso
    header("Location: index.php?sucesso=1");
    exit();
}
?>
