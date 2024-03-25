# Action Labs - Wordpress Test

Este é um projeto WordPress que inclui arquivos e configurações necessários para executar um site baseado em WordPress. O banco de dados está localizado na pasta "database" com o nome `action_labs_challenge.sql` para fácil acesso e gerenciamento.

## 1. Instalação

### Clone o projeto:

```bash
git clone https://github.com/jonathan-trl/action-labs-challenge.git
```

### 2. Copie a pasta do projeto para o diretório do seu servidor web (por exemplo, `htdocs` para XAMPP ou `www` para WAMP).

### 3. Configure o banco de dados:

- Importe o arquivo SQL fornecido na pasta "database" para o seu sistema de gerenciamento de banco de dados (por exemplo, phpMyAdmin).

### 4. Configure o WordPress:

- Renomeie o arquivo `wp-config-sample.php` para `wp-config.php`.
- Edite o arquivo `wp-config.php` e atualize as configurações do banco de dados com as informações do seu sistema de gerenciamento de banco de dados.
- Caso você renomeou a pasta do projeto e não seja mais `action-labs-challenge`, no banco de dados, atualize as opções `siteurl` e `home` na tabela `wp_options` para corresponder ao seu ambiente local. Ou você pode definir essas opções no arquivo `wp-config.php`:

  ```php
  define('WP_HOME', 'http://localhost/nome-da-pasta');
  define('WP_SITEURL', 'http://localhost/nome-da-pasta');
  ```

### 5. Atualize os permalinks:

- Acesse `http://localhost/nome-da-pasta/wp-admin`
- Use as seguintes credenciais para acessar como administrador:
  - Usuário: `jonathan-dev`
  - Senha: `!v)F)0d%qq1eoWs888`
- Acesse o painel de administração do WordPress.
- Navegue até "Configurações" > "Links Permanentes" e clique em "Salvar alterações".

### 6. Acesse o site WordPress no navegador
- `http://localhost/nome-da-pasta`