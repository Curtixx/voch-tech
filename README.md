<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Processo seletivo VOCH TECH
<p>
<img src="http://img.shields.io/static/v1?label=STATUS&message=PRONTO%20PRA%20USO&color=GREEN&style=for-the-badge"/>
</p>

## :open_file_folder: Tecnologias utilizadas:
- PHP
- Laravel
- Eloquent
- TailwindCSS

## :house: Como rodar o projeto localmente
- Instale todas essas dependencias:
  - <a href="https://laragon.org/download/index.html">Laragon</a>
  - <a href="https://code.visualstudio.com/download">Visual Studio Code</a> (opcional)
  - <a href="https://dev.mysql.com/downloads/workbench/">Mysql Workbench</a> (opcional, caso queira o laragon tem dentro dele o HeidiSQL)
  - <a href="https://git-scm.com/download/win">Git</a>
  - <a href="https://nodejs.org/en/">Node.js</a>
- Abra o laragon inicie os serviços e abra o terminal
- Crie uma nova conexão no MysqlWorkbech com a configuração padrão
- Rode a seguinte linha de codígo na query do mysql: `create database laravel; use laravel;`
- No .env mude as configurações do banco
- Após abrir o terminal clone o projeto: `git clone https://github.com/Curtixx/voch-tech.git`
- Entre norepositório e rode os seguintes comandos:
  - `composer require` para instalar as dependências do composer
  - `npm ci` para instalar as dependências do vite.js
  - `npm run build` para buildar o projeto
  - `php artisan migrate` para criar as tabelas no banco
  - `php artisan db:seed` para popular o banco de dados
  - `php artisan serve` para executar o projeto
  - `npm run dev` para rodar o vite (esse comando e o comando de cima deve rodar juntos, para isso inicie outro terminal)
  - Pronto o projeto estará rodando no localhost na porta 8000: `127.0.0.1:8000`
## :white_check_mark: Pronto, a API está pronta para ser usada localmente

## Sobre o projeto
Para a realização do projeto foi usado:
  - Laravel Livewire que nada mais é que uma biblioteca do Laravel para deixar a aplicação mais interativa e dinamica apenas com o uso de PHP sem JavaScript
  - Eloquent ORM é a ORM padrão do Laravel que facilita e deixa mais intuitivo as consultas com o banco
  - TailwindCSS para a estilização da aplicação melhorando o UX 


## Redes
- <a href="https://www.linkedin.com/in/henrique-curtis-26325822a/">Linkedin</a>
- <a href="https://github.com/Curtixx">GitHub</a>
- <a href="https://portfolio-angular-js.vercel.app">Portfólio</a>
