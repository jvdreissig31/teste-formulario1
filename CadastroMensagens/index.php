<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de Recados</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <div class="card">
        <h2>Enviar Mensagem</h2>
        
        <form id="formRecado" action="processar.php" method="POST">
            <div class="form-group">
                <input type="text" name="nome" id="nome" placeholder="Seu nome completo">
                <p id="erroNome" class="error-msg">O nome é obrigatório.</p>
            </div>

            <div class="form-group">
                <textarea name="mensagem" id="mensagem" placeholder="Escreva sua mensagem aqui..."></textarea>
                <p id="erroMsg" class="error-msg">A mensagem não pode estar vazia.</p>
            </div>

            <button type="submit">Enviar Agora</button>
        </form>
    </div>

    <script>
        const form = document.getElementById('formRecado');
        
        form.onsubmit = function(event) {
            let temErro = false;
            const nome = document.getElementById('nome');
            const mensagem = document.getElementById('mensagem');

            if (nome.value.trim() === "") {
                document.getElementById('erroNome').style.display = 'block';
                nome.style.borderColor = '#dc3545';
                temErro = true;
            }

            if (mensagem.value.trim() === "") {
                document.getElementById('erroMsg').style.display = 'block';
                mensagem.style.borderColor = '#dc3545';
                temErro = true;
            }

            if (temErro) {
                event.preventDefault();
            }
        };
    </script>
</body>
</html>