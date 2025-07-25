# 🏦 Bankmanager – Teste Técnico PHP

Sistema de gerenciamento acadêmico desenvolvido em **PHP puro** com padrão **MVC**, autenticação de administrador, e gerenciamento de:

- Áreas de curso
- Cursos
- Alunos
- Matrículas

Inclui **login seguro**, testes com PHPUnit, estrutura via **Composer**, rodando localmente ou via **Docker**.

---

## 🚀 Instalação Rápida

### ✅ 1. Clone o repositório

```bash
git clone https://github.com/GuilhermeVerrone/teste-finnet.git
cd teste-finnet
```

### ✅ 2. Instale as dependências

```bash
composer install
```

> Requer PHP 8.1+ e Composer instalado.

### ✅ 3. Configure o banco de dados

Crie um banco MySQL chamado `bankmanager` e execute o script:

```bash
mysql -u root -p bankmanager < database/migration.sql
```

Um admin padrão será criado:

- **Email:** `admin@admin.com`
- **Senha:** `123456`

### ✅ 4. Inicie o servidor embutido do PHP

```bash
php -S localhost:8000 -t public
```

Acesse em: [http://localhost:8000/login](http://localhost:8000/login)

---

## 🐳 Executando com Docker (opcional)

> Certifique-se de ter Docker + Docker Compose instalados.

```bash
docker-compose up -d
```

Acesse em: [http://localhost:8000](http://localhost:8000)

---

## 🧪 Testes

Rode os testes unitários com:

```bash
vendor/bin/phpunit
```

Cobertura:

- ÁreaCurso Model
- Aluno Model
- Matricula Model

---

## 📁 Estrutura de Diretórios

```
app/
├── controllers/
├── models/
├── views/
config/
database/
public/         ← index.php (roteador)
tests/
```

---

## 🔐 Rotas Protegidas

| Método | Rota          | Ação                          |
| ------ | ------------- | ----------------------------- |
| GET    | /login        | Exibe tela de login           |
| POST   | /login        | Realiza login                 |
| GET    | /logout       | Logout                        |
| GET    | /areas        | Listar áreas de curso         |
| GET    | /areas/create | Formulário de nova área       |
| POST   | /areas/store  | Salvar nova área              |
| ...    | ...           | (idem para cursos, alunos...) |

---

## 🛠️ Tecnologias Usadas

- PHP 8.1+
- Composer (autoload + testes)
- PHPUnit (testes unitários)
- MySQL (migrations incluídas)
- Docker (opcional)
- Bootstrap 5 (UX)
- jQuery (interações básicas)

---

## 👨‍💻 Autor

[Guilherme Verrone](mailto:guilherme.verrone@outlook.com)

---

## 📝 Licença

MIT
