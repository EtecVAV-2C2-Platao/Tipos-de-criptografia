<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criptografia no PHP</title>
</head>

<body>
    <header>
        <h1>Criptografia no PHP</h1>
        <p>Conheça e teste alguns recursos de criptografia disponíveis no PHP.</p>
    </header>

    <hr>

    <p>Clique em um tópico para ler sobre ele e fazer um teste.</p>

    <details>
        <summary>Criptografia simétrica</summary>
        <p>Usa a mesma chave para criptografar e descriptografar uma informação.</p>
        <p>Exemplo: AES-256-CBC.</p>

        <form action="demonstracao.php" method="POST">
            <input type="hidden" name="tipo" value="simetrica">

            <label>Digite um texto:</label><br>
            <input type="text" name="texto" required>
            <button type="submit">Criptografar</button>
        </form>
    </details>

    <details>
        <summary>Criptografia assimétrica</summary>
        <p>Usa uma chave pública para criptografar e uma chave privada para descriptografar.</p>
        <p>Exemplo: RSA.</p>

        <form action="demonstracao.php" method="POST">
            <input type="hidden" name="tipo" value="assimetrica">

            <label>Digite um texto curto:</label><br>
            <input type="text" name="texto" required>
            <button type="submit">Testar RSA</button>
        </form>
    </details>

    <details>
        <summary>Hash criptográfico</summary>
        <p>Transforma um texto em uma sequência que não pode ser revertida.</p>
        <p>Exemplo: SHA-256.</p>

        <form action="demonstracao.php" method="POST">
            <input type="hidden" name="tipo" value="hash">

            <label>Digite um texto:</label><br>
            <input type="text" name="texto" required>
            <button type="submit">Gerar hash</button>
        </form>
    </details>

    <details>
        <summary>Hash de senhas</summary>
        <p>É usado para guardar senhas com segurança, sem salvar a senha original.</p>
        <p>Exemplos: bcrypt, Argon2i e Argon2id.</p>

        <form action="demonstracao.php" method="POST">
            <input type="hidden" name="tipo" value="senha">

            <label>Digite uma senha de teste:</label><br>
            <input type="password" name="texto" required>
            <button type="submit">Gerar hash da senha</button>
        </form>
    </details>

    <details>
        <summary>Assinatura digital</summary>
        <p>Confirma quem enviou uma mensagem e verifica se ela foi alterada.</p>

        <form action="demonstracao.php" method="POST">
            <input type="hidden" name="tipo" value="assinatura">

            <label>Digite uma mensagem:</label><br>
            <input type="text" name="texto" required>
            <button type="submit">Assinar e verificar</button>
        </form>
    </details>

    <details>
        <summary>Números aleatórios seguros</summary>
        <p>São usados para criar tokens, chaves e códigos de confirmação seguros.</p>

        <form action="demonstracao.php" method="POST">
            <input type="hidden" name="tipo" value="aleatorio">
            <input type="hidden" name="texto" value="token">

            <button type="submit">Gerar token</button>
        </form>
    </details>

   
</body>
</html>
