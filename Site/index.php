<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criptografia no PHP</title>
</head>

<body>
    <header>
        <h1>Criptografia no PHP</h1>
        <p>Conheça alguns tipos de criptografia e recursos de segurança disponíveis no PHP.</p>
    </header>

    <hr>

    <p>Clique em um tópico para ler sobre ele.</p>

    <details>
        <summary>Criptografia simétrica</summary>

        <p>
            A criptografia simétrica utiliza uma única chave para proteger e
            recuperar uma informação.
        </p>

        <p>
            A mesma chave que criptografa o conteúdo é usada para descriptografá-lo.
            Ela é rápida e indicada para dados que o sistema precisa ler novamente,
            como informações confidenciais no banco de dados.
        </p>

        <p>Exemplos: AES e ChaCha20.</p>
    </details>

    <details>
        <summary>Criptografia assimétrica</summary>

        <p>
            Usa duas chaves relacionadas: uma chave pública e uma chave privada.
            A chave pública pode ser compartilhada, mas a chave privada deve ficar protegida.
        </p>

        <p>
            Uma mensagem criptografada com a chave pública só pode ser aberta pela
            chave privada correspondente. É usada em certificados digitais, HTTPS e
            troca segura de informações.
        </p>

        <p>Exemplo: RSA.</p>
    </details>

    <details>
        <summary>Hash criptográfico</summary>

        <p>
            Transforma uma informação em uma sequência de caracteres de tamanho fixo.
            Esse resultado não deve ser revertido para o texto original.
        </p>

        <p>
            É usado para verificar a integridade de uma informação. Se um arquivo ou
            mensagem for alterado, o seu hash também será diferente.
        </p>

        <p>Exemplos: SHA-256 e SHA-512.</p>
    </details>

    <details>
        <summary>Hash de senhas</summary>

        <p>
            É usado para guardar senhas com segurança, sem salvar a senha original
            no banco de dados.
        </p>

        <p>
            Quando o usuário faz login, o sistema compara a senha digitada com o hash
            armazenado. Isso ajuda a proteger os dados mesmo se o banco de dados for
            acessado indevidamente.
        </p>

        <p>Exemplos: bcrypt, Argon2i e Argon2id.</p>
    </details>

    <details>
        <summary>Assinatura digital</summary>

        <p>
            A assinatura digital não é usada para esconder uma mensagem. Ela confirma
            quem enviou a informação e verifica se o conteúdo foi alterado.
        </p>

        <p>
            Ela usa uma chave privada para criar a assinatura e uma chave pública
            para verificá-la. É comum em documentos eletrônicos e contratos digitais.
        </p>
    </details>

    <details>
        <summary>Números aleatórios seguros</summary>

        <p>
            São usados para criar tokens, chaves, códigos de confirmação e links de
            recuperação de senha seguros.
        </p>

        <p>
            Esses valores devem ser difíceis de adivinhar, pois números previsíveis
            podem causar falhas de segurança em um sistema.
        </p>
    </details>


</body>
</html>
