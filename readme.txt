Curso de Laravel

[IMPORTANTE] Caso tenha ficado alguma dúvida, ou você queira aprender mais e se aprofundar em algum conceito consulte a documentação do laravel, pois é ela é excelente!

Não pude ir no curso ou queria revisar o que foi visto no curso, e agora!?
R: Veja o laracasts é o lugar mais recomendado para estudar laravel, e comece pelo laravel fundamentals (vai te dar uma boa base)!

Documentação: <https://laravel.com/docs/5.4>

Laracasts: <https://laracasts.com/series/laravel-5-fundamentals>

Intalação

https://docs.google.com/document/d/1BAaLgIoIbFKvRClufGAv02rJ2AAw_ZG4TWkiDc6BR9E/edit?usp=sharing

O que é o Laravel?
		
Open Source

Principais:
	- Inicialização
	- Modal
	- Controller
	- Views
	- Seeders

Utilização do Tinker

Comandos Utilizados:

composer global require "laravel/installer" 
laravel new laravel-course
cd laravel-course/

mysql> create database course;
cp .env.example .env
vim .env

  8 DB_CONNECTION=mysql
  9 DB_HOST=127.0.0.1
 10 DB_PORT=3306
 11 DB_DATABASE=course
 12 DB_USERNAME=root
 13 DB_PASSWORD=

php artisan key:generate  //If the application key is not set, your user sessions and other encrypted data will not be secure

php artisan serve // pra testar se está tudo ok

Mostrar a estrutura de diretórios e explicar o MVC e como se encaixa nele.

Overview
	Model
		Definem o relacionamento do objeto
	
	comandos pra estar as páginas
	cp -r basefiles-curso-laravel/boxed_horizontal/assets laravel-course/public/.
	mkdir resources/views/pages
	cp ../basefiles-curso-laravel/Saturn\ HTML\ Template/index.html resources/views/pages/
	cp -r ../basefiles-curso-laravel/Saturn\ HTML\ Template/* public/
	Views
		Frontend
	Controller - Conceitos de CRUD
	
php artisan make:auth

Routes
		rotas pra mostrar

		resourse
		Route::resource('photo', 'PhotoController', ['only' => [
		    'index', 'show'
		]]);

		Route::resource('photo', 'PhotoController', ['except' => [
			'create', 'store', 'update', 'destroy'
		]]);

php artisan route:list

Começar a criar a página

Migrations 
	up: method is used to add new tables, columns, or indexes to your database
	down: method should simply reverse the operations performed by the up method
php artisan make:model Post	
php artisan make:migration add_table_posts

php artisan route:list

Controller
	php artisan make:controller PostController --resource --model=Post
	criar rota resource para o PostController

	+Collection
	
	dump()
	dump and die dd()
	
Views


Validation
	Requests


