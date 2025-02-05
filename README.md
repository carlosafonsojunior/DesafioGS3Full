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


