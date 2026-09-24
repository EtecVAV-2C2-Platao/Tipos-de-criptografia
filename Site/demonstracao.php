<?php

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: index.php');
    exit;
}

$tipo = $_POST['tipo'] ?? '';
$texto = $_POST['texto'] ?? '';

$resultado = '';
$titulo = 'Resultado da demonstração';

/*
 * Retorna os erros do OpenSSL de forma legível.
 */
function erroOpenSSL(): string
{
    $erros = [];

    while ($erro = openssl_error_string()) {
        $erros[] = $erro;
    }

    if (empty($erros)) {
        return 'Não foi possível obter detalhes do erro do OpenSSL.';
    }

    return implode("\n", $erros);
}

try {

    switch ($tipo) {

        /*
         * =========================
         * HASH SHA-256
         * =========================
         */
        case 'hash':

            $titulo = 'Hash criptográfico - SHA-256';

            $resultado =
                "Texto original:\n\n" .
                $texto .
                "\n\n" .
                "Hash SHA-256:\n\n" .
                hash('sha256', $texto);

            break;


        /*
         * =========================
         * HASH DE SENHA
         * =========================
         */
        case 'senha':

            $titulo = 'Hash da senha';

            $hashSenha = password_hash(
                $texto,
                PASSWORD_DEFAULT
            );

            if ($hashSenha === false) {
                throw new Exception(
                    'Não foi possível gerar o hash da senha.'
                );
            }

            $resultado =
                "Senha informada:\n\n" .
                "********\n\n" .
                "Hash gerado:\n\n" .
                $hashSenha;

            break;


        /*
         * =========================
         * TOKEN ALEATÓRIO
         * =========================
         */
        case 'aleatorio':

            $titulo = 'Token aleatório seguro';

            $token = bin2hex(random_bytes(16));

            $resultado =
                "Token gerado:\n\n" .
                $token;

            break;


        /*
         * =========================
         * CRIPTOGRAFIA SIMÉTRICA
         * =========================
         */
        case 'simetrica':

            $titulo = 'Criptografia simétrica - AES-256-CBC';

            $metodo = 'AES-256-CBC';

            /*
             * Exemplo didático.
             *
             * Em uma aplicação real, a chave não deve
             * ficar escrita diretamente no código.
             */
            $chave = 'minha-chave-secreta';

            $tamanhoIV = openssl_cipher_iv_length($metodo);

            if ($tamanhoIV === false) {
                throw new Exception(
                    'Não foi possível determinar o tamanho do IV.'
                );
            }

            $iv = random_bytes($tamanhoIV);

            $criptografado = openssl_encrypt(
                $texto,
                $metodo,
                $chave,
                0,
                $iv
            );

            if ($criptografado === false) {
                throw new Exception(
                    "Não foi possível criptografar o texto.\n\n" .
                    erroOpenSSL()
                );
            }

            $original = openssl_decrypt(
                $criptografado,
                $metodo,
                $chave,
                0,
                $iv
            );

            if ($original === false) {
                throw new Exception(
                    "Não foi possível descriptografar o texto.\n\n" .
                    erroOpenSSL()
                );
            }

            $resultado =
                "Texto original:\n\n" .
                $texto .
                "\n\n" .
                "Texto criptografado:\n\n" .
                $criptografado .
                "\n\n" .
                "Texto descriptografado:\n\n" .
                $original;

            break;


        /*
         * =========================
         * TIPO INVÁLIDO
         * =========================
         */
        default:

            throw new Exception(
                'Tipo de demonstração inválido.'
            );
    }

} catch (Throwable $e) {

    $titulo = 'Erro na demonstração';

    $resultado = $e->getMessage();
}

?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">

    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0"
    >

    <title>
        <?php echo htmlspecialchars($titulo); ?>
    </title>

    <link
        rel="stylesheet"
        href="../Site/style/style.css"
    >

</head>

<body>

    <?php include '../Site/style/header.php'; ?>

    <main>

        <section class="resultado">

            <h2>
                <?php echo htmlspecialchars($titulo); ?>
            </h2>

            <pre><?php
                echo htmlspecialchars($resultado);
            ?></pre>

            <div class="acoes">

                <a
                    href="index.php"
                    class="btn"
                >
                    ← Voltar para a página inicial
                </a>

            </div>

        </section>

    </main>

    <?php include '../Site/style/footer.php'; ?>

</body>

</html>
