<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Criptografia no PHP</title>
</head>

<body>
    <link rel="stylesheet" href="../Site/style/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>


    <header>
        <h1>Criptografia no PHP</h1>
        <p>Conheça e teste alguns recursos de criptografia disponíveis no PHP.</p>
    </header>

    <hr>

    <p>Clique em um tópico para ler sobre ele e fazer um teste.</p>

    <div class="cards-grid">
        <div class="card">
            <div class="card-body">
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
            </div>
        </div>

        <div class="card">
            <div class="card-body">
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
            </div>
        </div>

        <div class="card">
            <div class="card-body">
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
            </div>
        </div>

        <div class="card">
            <div class="card-body">
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
            </div>
        </div>

        <div class="card">
            <div class="card-body">
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
            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <details>
                    <summary>Números aleatórios seguros</summary>
                    <p>São usados para criar tokens, chaves e códigos de confirmação seguros.</p>

                    <form action="demonstracao.php" method="POST">
                        <input type="hidden" name="tipo" value="aleatorio">
                        <input type="hidden" name="texto" value="token">

                        <button type="submit">Gerar token</button>
                    </form>
                </details>
            </div>
        </div>
    </div>
   
</body>
</html>
