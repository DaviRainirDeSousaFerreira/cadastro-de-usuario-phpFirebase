# Cadastro de Usuário PHP com Firebase

Este é um projeto simples de cadastro de usuário utilizando PHP e Firebase (Realtime Database). O objetivo é mostrar como integrar um banco de dados Firebase com um sistema PHP para armazenar informações de usuários.

## Requisitos

- PHP >= 7.4
- Composer
- Conta no [Firebase](https://firebase.google.com/)

## Como Configurar

### 1. Crie um Projeto no Firebase

- Acesse o [console do Firebase](https://console.firebase.google.com/).
- Crie um novo projeto ou use um já existente.
- No menu lateral, acesse **Realtime Database** e crie um banco de dados.
- Em seguida, vá até **Configurações do Projeto** e na seção **Contas de Serviço**, gere as credenciais do Firebase clicando em **Gerar nova chave privada**.
- baixe o arquivo **JSON** geradoe e crie uma pasta chamada firebase dentro do seu projeto, depois renomeie o arquivo para firebase-config.json (isso é importante para garantir que o código funcione corretamente).

### 2. Instale as Dependências

Para instalar as dependências do projeto, você precisará do Composer. Siga estas etapas:

1. Baixe o arquivo `composer.phar` clicando no link abaixo:

   [Baixar Composer PHAR](https://getcomposer.org/composer.phar)

2. Após o download, coloque o arquivo `composer.phar` dentro da raiz do seu projeto (onde está o arquivo `composer.json`).

Agora que você tem o `composer.phar` no seu projeto, execute o seguinte comando para instalar todas as dependências do projeto:

```bash
php composer.phar install


### 3. Inicie o Servidor Local

Após instalar as dependências e configurar o Firebase, inicie o servidor PHP com:

```bash
php -S localhost:8000

Depois, abra o navegador e acesse:

http://localhost:8000
