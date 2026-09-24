<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Criptografia no PHP</title>

    <link rel="stylesheet" href="../Site/style/style.css">

    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB"
        crossorigin="anonymous"
    >
</head>

<body>

    <?php include '../Site/style/header.php'; ?>

    <main>

        <p class="introducao">
            Clique em um tópico para ler sobre ele e fazer um teste.
        </p>

        <div class="cards-grid">

            <!-- Criptografia simétrica -->
            <div class="card">
                <div class="card-body">
                    <details>
                        <summary>Criptografia simétrica</summary>

                        <p>
                            Usa a mesma chave para criptografar e
                            descriptografar uma informação.
                        </p>

                        <p>Exemplo: AES-256-CBC.</p>

                        <form action="demonstracao.php" method="POST">
                            <input
                                type="hidden"
                                name="tipo"
                                value="simetrica"
                            >

                            <label>Digite um texto:</label>

                            <input
                                type="text"
                                name="texto"
                                required
                            >

                            <button type="submit">
                                Criptografar
                            </button>
                        </form>
                    </details>
                </div>
            </div>

            <!-- Hash criptográfico -->
            <div class="card">
                <div class="card-body">
                    <details>
                        <summary>Hash criptográfico</summary>

                        <p>
                            Transforma um texto em uma sequência que não pode
                            ser revertida.
                        </p>

                        <p>Exemplo: SHA-256.</p>

                        <form action="demonstracao.php" method="POST">
                            <input
                                type="hidden"
                                name="tipo"
                                value="hash"
                            >

                            <label>Digite um texto:</label>

                            <input
                                type="text"
                                name="texto"
                                required
                            >

                            <button type="submit">
                                Gerar hash
                            </button>
                        </form>
                    </details>
                </div>
            </div>

            <!-- Hash de senhas -->
            <div class="card">
                <div class="card-body">
                    <details>
                        <summary>Hash de senhas</summary>

                        <p>
                            É usado para guardar senhas com segurança, sem
                            salvar a senha original.
                        </p>

                        <p>
                            Exemplos: bcrypt, Argon2i e Argon2id.
                        </p>

                        <form action="demonstracao.php" method="POST">
                            <input
                                type="hidden"
                                name="tipo"
                                value="senha"
                            >

                            <label>Digite uma senha de teste:</label>

                            <input
                                type="password"
                                name="texto"
                                required
                            >

                            <button type="submit">
                                Gerar hash da senha
                            </button>
                        </form>
                    </details>
                </div>
            </div>

            <!-- Números aleatórios seguros -->
            <div class="card">
                <div class="card-body">
                    <details>
                        <summary>Números aleatórios seguros</summary>

                        <p>
                            São usados para criar tokens, chaves e códigos de
                            confirmação seguros.
                        </p>

                        <form action="demonstracao.php" method="POST">
                            <input
                                type="hidden"
                                name="tipo"
                                value="aleatorio"
                            >

                            <input
                                type="hidden"
                                name="texto"
                                value="token"
                            >

                            <button type="submit">
                                Gerar token
                            </button>
                        </form>
                    </details>
                </div>
            </div>

        </div>

    </main>

    <?php include '../Site/style/footer.php'; ?>

</body>

</html>
