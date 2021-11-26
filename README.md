## Sobre:

API teste:
- Retornar se usuário é válido.
- Retornar se o usuário tem acesso.

## Ferramentas Utilizadas:

- PHP 7.4.19 
- Laravel 8.73.2
- Composer
- Laragon Full 5.0.0
- Apache 2.4.47
- Postman


## Como Utilizar:

01. Baixar o [Laragon](https://laragon.org/download/) versão Full
02. Iniciar o serviço do Laragon
03. Clonar o projeto (na pasta do Laragon \laragon\www)
04. Pelo terminal vá até o diretório clonado do projeto
05. Executar: composer update
06. Após baixar as dependências execute: php artisan serve
07. Abrir o Postman
08. Criar uma new Tab 
09. localhost:8000/api/login (GET)
10. Na aba Body, em form-data, informar os seguintes valores (para resposta True):
    * KEY = user VALUE = super
    * KEY = password VALUE = 01234
11. localhost:8000/api/acesso/{user} (POST) 
    onde {user} é o usuário que tem o acesso, ex.: super.
12. Retornará True se o usuário de acesso está logado.


