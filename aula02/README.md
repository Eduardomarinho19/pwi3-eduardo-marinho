pwi3-Eduardo marinho

Aulas de Programação Web III com o professor João Siles

**Aulas de Programação Web III dia 11/08/2025

Instalação e Configuração do Laravel

Este guia detalha o processo de instalação e a configuração inicial de um projeto Laravel. Siga os passos abaixo para começar.

Pré-requisitos

Antes de iniciar, certifique-se de que seu ambiente de desenvolvimento atende aos seguintes requisitos:

PHP: Versão 8.2 ou superior

Composer: Gerenciador de dependências do PHP. Você pode baixá-lo
em getcomposer.org

Opção 1: Clonar um projeto existente do GitHub

Se você já tem um projeto Laravel em um repositório, siga estes passos para configurá-lo em sua máquina local.

Inicie o XAMPP

Abra o XAMPP Control Panel e clique nos botões Start para os módulos Apache e MySQL. Eles ficarão verdes, indicando que os serviços estão rodando.

Clone o repositório na pasta htdocs

Abra seu terminal (CMD ou PowerShell) e navegue até a pasta htdocs do XAMPP, que geralmente está em C:\xampp\htdocs.

Bash

   ***cd C:\xampp\htdocs***
Em seguida, clone o seu repositório do GitHub, substituindo a URL abaixo pela URL do seu projeto:

Bash

git clone https://github.com/usuario/repositorio.git

**

Passo 2: Instalação do Laravel
**

Existem duas formas de criar um novo projeto Laravel. Os comandos abaixo devem ser executados no seu terminal, CMD ou PowerShell. No Windows, é altamente recomendado que você execute o PowerShell como administrador para evitar problemas de permissão.

Opção A: Usando o Composer

Este é o método mais comum e direto. Ele cria um novo projeto e instala todas as dependências necessárias.

Abra seu terminal e execute o comando, substituindo nome-do-projeto pelo nome desejado para a sua aplicação:

Bash

composer create-project laravel/laravel nome-do-projeto

Opção B: Usando o Laravel Installer

Se você planeja criar muitos projetos Laravel, instalar o Laravel Installer globalmente pode simplificar o processo.

Abra seu terminal e instale o installer com o Composer:

composer global require laravel/installer

Crie um novo projeto usando o comando laravel new:

Bash

laravel new nome-do-projeto

2. Instalação e Iniciação de Projeto Laravel
**

Depois que o aplicativo for criado, você pode iniciar o servidor de desenvolvimento local do Laravel, o queue worker e o servidor de desenvolvimento do Vite usando o dev script do Composer.

Navegue até o diretório do projeto

Entre na pasta do projeto que você acabou de criar. Execute o comando no seu terminal:

Bash

cd nome-do-projeto

Instale as dependências e inicie o servidor

Crie o arquivo de ambiente, gere a chave da aplicação, instale as dependências do Node.js e compile os assets do projeto. Por fim, inicie o servidor de desenvolvimento, o queue worker e o Vite:

Bash

npm install
npm run build

Instale as dependências do Composer:

bash

composer install

Se não tiver o Composer, instale aqui.

Copie o arquivo de configuração de ambiente:

bash

cp .env.example .env

Configure o arquivo .env:

Abra o arquivo .env e ajuste as configurações de banco de dados, cache, etc., conforme necessário.

Gere a chave da aplicação:

bash

php artisan key:generate

Rode as migrations do banco de dados (se necessário):

bash

php artisan migrate

Por ultimo rode esse comando para iniciar o projeto:

bash

composer run dev

Sua aplicação estará acessível no seu navegador

para visualizar o banco de dados

instalar a extensão SQLite

ctrl + P e pesquisar sqlite open database

no canto inferior vai ter o sqlite explorer para visualizar o banco
no terminal rodar php artisan e depois rodar php artisan:seed

entrar no seeders depois em databaseseeder.php e da linha 6 e 18 ate 21 adc comentario e retira os da linhas
esse simbolo ">" ctrl + p e run curry para criar os nomes,senha,email automatico 
lembrando q tem q atualizar no sqlite erxplorer nmo canto inferior esquerdo para aparecer



php artisan make:view cliente

serve para criar uma nova view chamada cliente em "resources"

obs: "ctrl + p é a pesquisa de arquivo do vscode"


modificar o banco de dados na tabela cliente 

php artisan make: create-table-cliente 
para cria umas tabela chamada cliente 

php artisan migrate vai fazer rodar as migrations criada 

 php artisan make:model Cliente  
 para cira uma nova model 
 model é responsavel pela comunicação com o banco de dados de extrema importancia para passar os dados 