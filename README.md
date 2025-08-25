# 🌐 Projeto Laravel  

<p align="center">
  <img src="https://img.shields.io/badge/Laravel-10.x-FF2D20?style=for-the-badge&logo=laravel&logoColor=white"/>
  <img src="https://img.shields.io/badge/PHP-8.x-777BB4?style=for-the-badge&logo=php&logoColor=white"/>
  <img src="https://img.shields.io/badge/Bootstrap-5-7952B3?style=for-the-badge&logo=bootstrap&logoColor=white"/>
</p>

---

## 📖 Sobre o Projeto
Este é um sistema desenvolvido em **Laravel**, que implementa autenticação de usuários, cadastro, login, edição de senha e gerenciamento de usuários.  
As telas estão padronizadas com um **tema em azul bebê + cinza azulado**, garantindo um design limpo e moderno.  

---

## ✨ Funcionalidades
✔️ Cadastro de usuários  
✔️ Login e Logout  
✔️ Edição de senha  
✔️ Dashboard de usuários  
✔️ Design responsivo com Bootstrap 5  

---

## 🛠️ Tecnologias Utilizadas
- [Laravel](https://laravel.com/) – Framework PHP  
- [Blade](https://laravel.com/docs/10.x/blade) – Template engine  
- [Bootstrap 5](https://getbootstrap.com/) – Estilização  
- [MySQL](https://www.mysql.com/) – Banco de dados (configurável no `.env`)  

---

## ⚙️ Como rodar o projeto

1️⃣ **Clone o repositório**
```bash
git clone https://github.com/Isa-Paiola/Projeto_Laravel.git
cd Projeto_Laravel

2️⃣ Instale as dependências
```bash
composer install]

3️⃣ Configure o ambiente
*Copie o arquivo .env.example e renomeie para .env
*Configure o banco de dados (usuário, senha e nome do banco)

4️⃣ Gere a chave da aplicação
```bash
php artisan key:generate

5️⃣ Crie as tabelas no banco
```bash
php artisan migrate

6️⃣ Inicie o servidor
```bash
php artisan serve

✨ Agora acesse no navegador:
👉 http://127.0.0.1:8000

📂 Estrutura de Pastas
```bash
Projeto_Laravel/
 ├── app/             # Controllers, Models e lógica de negócio
 ├── resources/views/ # Telas (Blade templates: login, cadastro, home, etc.)
 ├── routes/web.php   # Rotas da aplicação
 ├── public/          # Arquivos públicos (CSS, JS, imagens)
 └── database/        # Migrations e seeds

🎨 Layout
As páginas possuem um tema visual padronizado:
Gradiente em azul bebê + cinza azulado
Botões arredondados
Estilo responsivo com Bootstrap 5

🤝 Contribuição
Faça um fork do projeto
Crie uma branch para sua feature (git checkout -b feature/minha-feature)
Faça commit das alterações (git commit -m 'Minha nova feature')
Envie para o repositório (git push origin feature/minha-feature)
Abra um Pull Request 🎉

📜 Licença
Este projeto é de uso livre para fins acadêmicos e de estudo.
Defina uma licença oficial (ex: MIT) se desejar.

💙 Desenvolvido com dedicação por Isa-Paiola
