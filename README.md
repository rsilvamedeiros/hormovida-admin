# hormovida-admin

# Projeto ADMIN - HormoVida

## Informações

Sistema ADMIN em Laravel PHP da HormoVida.

## Requisitos

Ter instalado o PHP 7.4 (estamos ajustando para rodar em outras versões, principalmente no PHP 8.0)
\*\* Recomendo utilizar Laragon (https://laragon.org/download/index.html), facilita a configuração e tem todo o painel para configurar versões do PHP, criação de site, Banco de Dados (HeidiSQL) e um CMD próprio.

\*\* Se utilizar xampp, o processo é o padrão, clonar o repositório dentro da pasta /htdocs.

## Ações disponiveis

Cadastro de Clientes;
Cadastro de Médicos;
Cadastro de Funcionários;
Agendar exame;
Realização do exame;
Informações pré exame;
Verificação de taxa;
Visualização do laudo;
Retirada do exame;
Geração de relatórios;
Atualização do prontuário;
Consulta do histórico dos pacientes (prontuário);

## Instalação

Caso não tenha clonado, só abrir uma guia CMD ou GitBash ou a linha de comando que utilize por padrão, e rode o comando:
`git clone https://github.com/rsilvamedeiros/hormovida-admin.git`

Inicialmente, na pasta do projeto, já clonado rode o composer:
`composer install`
(irá baixar as dependências na pasta /vendor)

No projeto já tem o arquivo .env, com configurações padrões para banco local, com o DATABASE hormovida.

(Caso as configurações locais sejam diferentes, modifique o seu .env, mas não faça o commit dessa alteração, irei adicionar no gitignore novamente o .env para não termos problemas de configurações com o sistema rodando)

Rodar o comando = `php artisan key:generate`
Rodar o comando = `php artisan migrate --seed` (irá criar as tables e alguns dados no BD)
Rodar o comando = `php artisan serve`

> Para logar-se como ADMIN, acesse a url http://SEU_LOCAL_HOST/home

Login e senha padrão:
_login:_ admin
*senha:*admin
