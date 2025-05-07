 
````  
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

# Gere a key do Laravel
php artisan key:generate

# Configure seu banco de dados no arquivo .env
DB_DATABASE=seu_banco
DB_USERNAME=seu_usuario
DB_PASSWORD=sua_senha

# Rode as migrations
php artisan migrate


# Inicie o servidor local
php artisan serve
````

Acesse: [[http://localhost:8000](http://localhost:8000/welcome))

---

## 🗃️ Estrutura das Tabelas

* **Clientes:** Nome, Email, CPF , Senha
* **Produtos:** Nome, Estoque, Preço, Descrição
* **Vendas:** Cliente, Produto, Quantidade (com baixa automática no estoque)

---

## 🛠️ Como contribuir

1. Faça um fork
2. Crie uma branch: `git checkout -b minha-mudanca`
3. Commit suas alterações: `git commit -m 'Minha alteração'`
4. Push para a branch: `git push origin minha-mudanca`
5. Abra um pull request 🙌

---

## 📄 Licença

Este projeto é open-source e está sob a licença MIT.

---

## 🙋‍♂️ Autor

Feito com 💻 por **João Pedro Gabriel**

* GitHub: [@joaojp900](https://github.com/joaojp900)
* LinkedIn: [linkedin.com/in/joao-pedro-gabriel](https://www.linkedin.com/in/joao-pedro-gabriel)

```

---

Se quiser, posso criar esse `README.md` automaticamente e te mandar o arquivo pronto para colocar no repositório. Deseja isso?
```
