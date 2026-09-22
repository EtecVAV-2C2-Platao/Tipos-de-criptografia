<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
    header('Location: index.html');
    exit;
}

$tipo = $_POST['tipo'];
$texto = $_POST['texto'];

if ($tipo == 'hash') {
    echo 'Hash SHA-256:' . PHP_EOL . PHP_EOL;
    echo hash('sha256', $texto);
}

if ($tipo == 'senha') {
    echo 'Hash da senha:' . PHP_EOL . PHP_EOL;
    echo password_hash($texto, PASSWORD_DEFAULT);
}

if ($tipo == 'aleatorio') {
    echo 'Token aleatório seguro:' . PHP_EOL . PHP_EOL;
    echo bin2hex(random_bytes(16));
}

if ($tipo == 'simetrica') {
    $metodo = 'AES-256-CBC';
    $chave = 'minha-chave-secreta';
    $iv = random_bytes(openssl_cipher_iv_length($metodo));

    $criptografado = openssl_encrypt($texto, $metodo, $chave, 0, $iv);
    $original = openssl_decrypt($criptografado, $metodo, $chave, 0, $iv);

    echo 'Texto criptografado:' . PHP_EOL . PHP_EOL;
    echo $criptografado . PHP_EOL . PHP_EOL;

    echo 'Texto descriptografado:' . PHP_EOL . PHP_EOL;
    echo $original;
}

if ($tipo == 'assimetrica') {
    $chaves = openssl_pkey_new([
        'private_key_bits' => 2048,
        'private_key_type' => OPENSSL_KEYTYPE_RSA
    ]);

    openssl_pkey_export($chaves, $chavePrivada);

    $informacoes = openssl_pkey_get_details($chaves);
    $chavePublica = $informacoes['key'];

    openssl_public_encrypt($texto, $criptografado, $chavePublica);
    openssl_private_decrypt($criptografado, $original, $chavePrivada);

    echo 'Texto criptografado:' . PHP_EOL . PHP_EOL;
    echo base64_encode($criptografado) . PHP_EOL . PHP_EOL;

    echo 'Texto descriptografado:' . PHP_EOL . PHP_EOL;
    echo $original;
}

if ($tipo == 'assinatura') {
    $chaves = openssl_pkey_new([
        'private_key_bits' => 2048,
        'private_key_type' => OPENSSL_KEYTYPE_RSA
    ]);

    openssl_pkey_export($chaves, $chavePrivada);

    $informacoes = openssl_pkey_get_details($chaves);
    $chavePublica = $informacoes['key'];

    openssl_sign($texto, $assinatura, $chavePrivada, OPENSSL_ALGO_SHA256);

    $valida = openssl_verify(
        $texto,
        $assinatura,
        $chavePublica,
        OPENSSL_ALGO_SHA256
    );

    if ($valida == 1) {
        echo 'Assinatura criada e verificada com sucesso.' . PHP_EOL . PHP_EOL;
        echo 'A mensagem não foi alterada.';
    } else {
        echo 'Não foi possível verificar a assinatura.';
    }
}
?>
