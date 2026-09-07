# Tipos-de-criptografia

# Criptografia no PHP

Neste site veremos alguns dos tipos de criptografia e recursos de segurança disponíveis no PHP, entre eles:

- Criptografia simétrica;
- Criptografia assimétrica;
- Hash criptográfico;
- Hash de senhas;
- Assinatura digital;
- Geração de números aleatórios seguros.

## Criptografia simétrica

Na criptografia simétrica, a mesma chave é utilizada para criptografar e descriptografar uma informação. Esse tipo é usado quando o sistema precisa proteger um dado, mas também precisa lê-lo novamente no futuro.

Um exemplo é proteger dados de clientes no banco de dados. Alguns algoritmos usados são AES e ChaCha20.

## Criptografia assimétrica

A criptografia assimétrica utiliza duas chaves: uma chave pública e uma chave privada. A chave pública pode ser compartilhada, enquanto a chave privada deve ser mantida em segredo.

Ela é muito utilizada em certificados digitais, conexões HTTPS e troca segura de informações. O algoritmo RSA é um dos exemplos mais conhecidos.

## Hash criptográfico

O hash transforma uma informação em uma sequência de caracteres de tamanho fixo. Diferente da criptografia, o hash não pode ser revertido para o texto original.

Ele é usado para verificar a integridade de arquivos e mensagens, ou seja, para saber se o conteúdo foi alterado. SHA-256 e SHA-512 são exemplos de algoritmos de hash seguros.

## Hash de senhas

O hash de senhas é usado para armazenar senhas de forma segura. Em vez de salvar a senha original, o sistema salva apenas o seu hash.

Quando uma pessoa tenta entrar no sistema, a senha informada é comparada com o hash armazenado. Bcrypt, Argon2i e Argon2id são algoritmos usados para essa finalidade.

## Assinatura digital

A assinatura digital serve para confirmar que uma mensagem ou documento foi enviado por uma pessoa específica e que não sofreu alterações.

Ela não é usada para esconder o conteúdo, mas para garantir a autoria e a integridade da informação. É muito utilizada em documentos eletrônicos e na comunicação entre sistemas.

## Geração de números aleatórios seguros

Para proteger um sistema, também é necessário gerar senhas temporárias, tokens e chaves de forma imprevisível. O PHP possui recursos próprios para gerar esses valores com segurança.

Esses recursos são importantes, por exemplo, em links de recuperação de senha e códigos de confirmação.

## Conclusão

O PHP oferece diferentes recursos para proteger informações. Cada tipo tem uma finalidade: alguns escondem dados, outros verificam alterações, protegem senhas ou confirmam a autoria de uma mensagem. A escolha correta depende da necessidade de cada sistema.

## Referências

- [Manual do PHP — Segurança e armazenamento de dados](https://www.php.net/manual/en/security.database.storage.php)
- [Manual do PHP — Hash de senhas](https://www.php.net/manual/en/book.password.php)
- [Manual do PHP — OpenSSL](https://www.php.net/manual/en/book.openssl.php)
- [Manual do PHP — Sodium](https://www.php.net/sodium)
