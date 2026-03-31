## About this app

This is a base for any laravel 13 projects, included :
- Docker env with Sail
- Css build with Vite
- Login process with Fortify -> https://laravel.com/docs/13.x/fortify
- User role and permissions with Spatie -> https://spatie.be/docs/laravel-permission/v7/basic-usage/basic-usage
- Cookie consent by devrabiul -> https://github.com/devrabiul/laravel-cookie-consent

## Requierments

```bash
sudo apt update && sudo apt upgrade -y
```
```bash
sudo apt install php8.4-cli php8.4-common php8.4-mbstring php8.4-xml php8.4-bcmath php8.4-curl php8.4-mysql php8.4-zip php8.4-readline php8.4-gd php8.4-pgsql unzip curl git composer -y
```
You will also need to make an alias to use Sail commands :
On my zsh config into .zshrc:
```bash
# alias ohmyzsh="mate ~/.oh-my-zsh"
alias sail='sh $([ -f sail ] && echo sail || echo vendor/bin/sail)'
```
Make sure you have docker desktop or docker set up on your computer.


## Instalation

Pull the project.

Install composer :
```bash
composer install
```

Copie/Past the .env.example.

Generate app keys :
```bash
php artisan key:generate --ansi
```

Init db :
Run this command to init Sail :
```bash
php artisan sail:install
```
Select mysql service.

When install process is compleate, edit DB .env conf :
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=YOUR_PROJECT_NAME
DB_USERNAME=sail
DB_PASSWORD=password

Then stop the sail container
```bash
sail down
```
Restart it
```bash
sail up -d
```

Make laravel migration
```bash
sail artisan mirgate
```

Run seeder role (contain admin and user role, no permissions register)
```bash
php artisan db:seed --class=RolePermissionSeeder
```

Run the first vite build
```bash
sail npx vite build
```

## Usefull commands

Start project :
```bash
sail up -d
```
Stop project
```bash
sail stop
```

Start dev server :
After starting up the project
```bash
sail npx vite
```

Build assets :
```bash
sail npx vite build
```