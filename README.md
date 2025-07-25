# BankManager - Sistema Acadêmico em PHP (MVC + Docker)

Sistema para gerenciamento de alunos, cursos, áreas e matrículas com autenticação e interface amigável.

---

## 🚀 Tecnologias Utilizadas

- PHP 8
- MySQL 8
- Docker + Docker Compose
- Composer
- Bootstrap 5
- jQuery
- PHPUnit

---

## 📦 Requisitos

- [Docker](https://www.docker.com/)
- [Docker Compose](https://docs.docker.com/compose/)

---

## ⚙️ Instalação com Docker

Clone o repositório:

```bash
git clone https://github.com/GuilhermeVerrone/teste-finnet.git
cd teste-finnet
```

Suba os containers (PHP, Apache, MySQL):

```bash
docker-compose up -d
```

Acesse o container da aplicação:

```bash
docker exec -it bankmanager_app bash
```

Instale as dependências do Composer:

```bash
composer install
```

---

## 🗄️ Executar Migrations (via Docker)

Importe a estrutura do banco diretamente no container MySQL:

```bash
Get-Content migrations/migration.sql | docker exec -i bankmanager_db mysql -u root -proot bankmanager
```

- `bankmanager_db`: nome do container do MySQL
- `root`: usuário padrão
- `root`: senha padrão (sem espaço entre `-p` e a senha)

---

## 👤 Acesso ao Sistema

Acesse no navegador:

```
http://localhost:8000
```

Login padrão:

- **Email**: `admin@admin.com`
- **Senha**: `123456`

---

## 🧪 Rodar os Testes (PHPUnit)

```bash
docker exec -it bankmanager-app vendor/bin/phpunit
```

---

## 🛣️ Rotas principais

| Funcionalidade | Rota          |
| -------------- | ------------- |
| Login          | `/login`      |
| Logout         | `/logout`     |
| Áreas          | `/areas`      |
| Cursos         | `/cursos`     |
| Alunos         | `/alunos`     |
| Matrículas     | `/matriculas` |

---

## 📁 Estrutura de Pastas

```
├── app/
│   ├── controllers/
│   ├── models/
│   └── views/
├── config/
├── database/
│   └── migration.sql
├── public/
│   └── index.php
├── tests/
├── docker-compose.yml
├── Dockerfile
└── README.md
```

---

## 📄 Licença

MIT © 2025 - Guilherme Verrone
