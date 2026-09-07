# Tipos-de-criptografia

# Criptografia no PHP

Neste site vamos conhecer alguns tipos de criptografia e recursos de segurança que podem ser usados no PHP:

- Criptografia simétrica;
- Criptografia assimétrica;
- Hash criptográfico;
- Hash de senhas;
- Assinatura digital;
- Geração de números aleatórios seguros.

## Criptografia simétrica

Na criptografia simétrica, a mesma chave é usada para criptografar e descriptografar uma informação. Ela é usada quando precisamos proteger um dado, mas também queremos conseguir ler esse dado depois.

Um exemplo é proteger informações de clientes em um banco de dados. Alguns exemplos de algoritmos são AES e ChaCha20.

## Criptografia assimétrica

A criptografia assimétrica usa duas chaves: uma chave pública e uma chave privada. A chave pública pode ser compartilhada com outras pessoas, mas a chave privada deve ser mantida em segredo.

Ela é bastante usada em certificados digitais, conexões HTTPS e para trocar informações com mais segurança. Um dos exemplos mais conhecidos é o RSA.

## Hash criptográfico

O hash transforma uma informação em uma sequência de caracteres com tamanho fixo. Diferente da criptografia, não é possível voltar facilmente do hash para a informação original.

Ele pode ser usado para verificar se um arquivo ou mensagem foi alterado. SHA-256 e SHA-512 são exemplos de algoritmos de hash.

## Hash de senhas

O hash de senhas é usado para guardar senhas de uma forma mais segura. Em vez de salvar a senha original no sistema, é salvo apenas o seu hash.

Quando uma pessoa tenta fazer login, o sistema verifica a senha informada comparando com o hash que está salvo.

Alguns exemplos usados para isso são Bcrypt, Argon2i e Argon2id.

## Assinatura digital

A assinatura digital serve para confirmar quem enviou uma mensagem ou documento e também para verificar se ele foi alterado.

Ela não serve para esconder o conteúdo da mensagem. Sua função principal é confirmar a autoria e garantir que a informação não foi modificada.

Ela é muito usada em documentos digitais e na comunicação entre sistemas.

## Geração de números aleatórios seguros

Para deixar um sistema mais seguro, também é necessário criar senhas temporárias, tokens e chaves que sejam difíceis de adivinhar.

O PHP possui recursos próprios para gerar esses valores de forma segura.

Um exemplo de uso são os links para recuperação de senha e os códigos de confirmação.

## Conclusão

O PHP possui vários recursos para ajudar na segurança das informações. Cada um deles tem uma função diferente. Alguns servem para esconder dados, outros para verificar alterações, proteger senhas ou confirmar quem enviou uma informação.

Por isso, é importante escolher o recurso correto de acordo com o que o sistema precisa.

## Referências

- [Manual do PHP — Segurança e armazenamento de dados](https://www.php.net/manual/en/security.database.storage.php)
- [Manual do PHP — Hash de senhas](https://www.php.net/manual/en/book.password.php)
- [Manual do PHP — OpenSSL](https://www.php.net/manual/en/book.openssl.php)
- [Manual do PHP — Sodium](https://www.php.net/sodium)
