<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = strip_tags($_POST['nome']);
    $msg  = strip_tags($_POST['mensagem']);

    if (!empty($nome) && !empty($msg)) {
        echo "<h1>Dados recebidos com sucesso!</h1>";
        echo "<p><strong>Nome:</strong> $nome</p>";
        echo "<p><strong>Mensagem:</strong> $msg</p>";
        echo "<br><a href='index.php'>Voltar para o formulário</a>";
    } else {
        echo "Erro: Por favor, preencha todos os campos.";
    }
}
?>