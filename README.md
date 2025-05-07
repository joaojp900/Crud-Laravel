 
 

````markdown
# 🧩 Crud Laravel

Este é um projeto simples de **CRUD** (Create, Read, Update, Delete) desenvolvido com o framework **Laravel**, ideal para estudos e aplicações iniciais com PHP moderno, Blade, Eloquent ORM e rotas web. O sistema permite o gerenciamento de **clientes**, **produtos** e **vendas**, incluindo controle de estoque automático.

## 🚀 Funcionalidades

- ✅ Cadastro, edição e exclusão de **clientes**
- ✅ Cadastro de **produtos** com controle de **estoque**
- ✅ Registro de **vendas**, com verificação de estoque
- ✅ Relacionamento entre tabelas (produto → venda)

## 🧱 Tecnologias

- PHP 8.1+
- Laravel 10
- MySQL
- Bootstrap 5
- Blade (sistema de templates Laravel)

## 💻 Instalação

### Pré-requisitos

- PHP 8.1+
- Composer
- MySQL
- Git

### Passo a passo

```bash
# Clone o projeto
git clone https://github.com/joaojp900/Crud-Laravel.git

# Acesse a pasta
cd Crud-Laravel

# Instale as dependências
composer install

# Copie o arquivo de exemplo do .env
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate
````

Abra o arquivo `.env` e configure o banco de dados:

```dotenv
DB_DATABASE=seu_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha
```

Rode as migrations:

```bash
php artisan migrate
```

Inicie o servidor:

```bash
php artisan serve
```

### ✅ Acesse a aplicação em:

```
http://localhost:8000/welcome
```

> Rota configurada no arquivo de rotas:

```php
Route::get('welcome', [ProdutosController::class, 'index'])->name('Produtos.welcome');
```

---

## 🗃️ Estrutura das Tabelas

* **Clientes:** Nome, Email, CPF, Senha
* **Produtos:** Nome, Estoque, Preço, Descrição
* **Vendas:** Cliente, Produto, Quantidade (com baixa automática no estoque)

## 🙋‍♂️ Autor

Feito com 💻 por **João Pedro Gabriel**

* GitHub: [@joaojp900](https://github.com/joaojp900)
* LinkedIn: [linkedin.com/in/joao-pedro-gabriel](https://www.linkedin.com/in/joao-pedro-gabriel)

```

 
