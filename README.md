# DesafioGS3Full
Desafio GS3 FullStack

--Estrutura do Sistema:

Banco de Dados:

Tabela users (usuários).
Tabela profiles (perfís).
Tabela profile_user (relacionamento muitos-para-muitos entre usuários e perfis).

--Backend (Laravel 11):

Criar os modelos, controladores e rotas para gerenciar usuários, perfis e relações.
Implementar funcionalidades de administração para criar e atribuir perfis aos usuários.
Implementar a lógica para restringir o acesso dos usuários com perfil "comum" a visualizar e editar apenas suas próprias informações.

--Frontend (Angular 15):

Criar a interface para administração de usuários e perfis.
Criar a interface de visualização e edição de perfil para o usuário comum.

--Instalação do Backend (Laravel 11)
Primeiro, instale o Laravel 11 no seu ambiente. Caso não tenha o Composer instalado, faça isso primeiro. 

utilizando os comando a seguir

# Passo 1: Instalar Laravel 11
composer create-project --prefer-dist laravel/laravel sistema-de-usuarios

# Passo 2: Navegar para o diretório do projeto
cd sistema-de-usuarios

--Estrutura do Banco de Dados
Crie as migrações para as tabelas users, profiles e profile_user.

php artisan make:migration create_profiles_table --create=profiles

Migração para a Tabela users
Laravel já vem com uma migração para a tabela users, mas você pode modificá-la caso precise. O arquivo estará em database/migrations, e é possível adicionar campos específicos, caso necessário.

2.3 Migração para a Tabela profile_user (Relacionamento N:M)
Agora, crie a migração para a tabela intermediária profile_user:

php artisan make:migration create_profile_user_table --create=profile_user

Models do Backend
Agora crie os modelos de User e Profile.

Modelo Profile
Crie o modelo para Profile:

php artisan make:model Profile


