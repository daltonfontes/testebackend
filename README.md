
<p align="center">
  <img src="https://grupogpac.com.br/images/web/logos/logo-grupogpac.png" width="320" alt="gpac Logo" />
</p>


# Descrição do desafio

Criar uma API REST-FULL para o gerenciamento de uma loja que realiza venda de cursos, que poderá ser utilizada para mobile ou um SPA.

# Features

- [x] Cadastro de usuarios
- [x] Exibir todos usuarios ja cadastrados
- [x] Listar usuarios paginados
- [x] Editar usuarios
- [x] Remover usuarios
- [x] Visualizar usuarios de forma individual
- [x] Cadastro de cursos
- [x] Exibir todos cursos ja cadastrados
- [x] Listar cursos de forma individual
- [x] Editar cursos
- [x] Remover cursos
- [x] Cadastro de atividades
- [x] Remover uma atividade
- [x] Deletar uma atividade
- [x] Exibir todas as atividades
- [x] Listar atividade de forma individual


# Tecnologias

- Laravel
- MySQL
- Postman

 ### Pré-requisitos

Antes de começar, você vai precisar ter instalado em sua máquina as seguintes ferramentas:

[Git](https://git-scm.com)

Além disto é bom ter um editor para trabalhar com o código como [VSCode](https://code.visualstudio.com/)

### 🎲 Rodando o Back End (servidor)

```bash
# Clone este repositório
$ git clone https://github.com/daltonfontes/testebackend.git


# Vá para a pasta server
$ cd testebackend

# Instale as dependências
$ composer install

# Edite os campos abaixo no seu arquivo .env para configurar a base de dados.

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=testebackend
DB_USERNAME=dalton
DB_PASSWORD=admin

# Criar migrations
$ php artisan migrate

# Rotas
- http://localhost:8000/api/users
- http://localhost:8000/api/courses
- http://localhost:8000/api/activities
- http://localhost:8000/api/files

# Iniciar aplicação
$ php artisan serve
# O servidor inciará na porta:8000 - acesse <http://localhost:8000/api>
```
