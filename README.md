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

## ⚙️ Instalação e Execução

```bash
# Clone o repositório
git clone https://github.com/Isa-Paiola/Projeto_Laravel.git

# Acesse a pasta
cd Projeto_Laravel

# Instale dependências
composer install

# Copie o arquivo .env
cp .env.example .env

# Gere a chave da aplicação
php artisan key:generate

# Configure o banco de dados no .env e rode as migrations
php artisan migrate

# Inicie o servidor
php artisan serve


