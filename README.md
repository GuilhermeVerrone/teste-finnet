# Bankmanager (Ambiente Docker + PHP)

### 🚀 Como rodar o projeto

1. Atualize o WSL com:
   ```
   wsl --update
   ```

2. Depois de atualizado, rode:
   ```
   docker-compose up -d --build
   ```

3. Acesse:
   - http://localhost:8000 (aplicação)
   - http://localhost:8080 (phpMyAdmin)
     - Host: db
     - Usuário: root
     - Senha: root

### 📂 Estrutura

- `/app`: Código-fonte MVC
- `/public/index.php`: Ponto de entrada da aplicação
- `Dockerfile`: Ambiente PHP 8.1 + Apache
- `docker-compose.yml`: MySQL, PHP e phpMyAdmin

Pronto para desenvolver! 🚧
