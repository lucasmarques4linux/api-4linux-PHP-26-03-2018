# Rodando o projeto
```
git clone url-do-projeto
cd api4linux
composer install
php artisan migrate
php artisan db:seed
## Iniciando projeto Laravel 5.4

```
cd /var/www/html/

composer create-project --prefer-dist laravel/laravel api4linux "5.4.*"

cd api4linux/

touch storage/logs/laravel.log

chmod 777 -R storage/
```

## Criando Virtual Host
```
sudo touch /etc/apache2/sites-available/laravel.conf

sudo subl /etc/apache2/sites-available/laravel.conf
```
### VHost
```
<VirtualHost *:80>
	DocumentRoot /var/www/html/api4linux/public/
	ServerName api.laravel

	<Directory /var/www/html/api4linux/public/>
		Options FollowSymLinks
		AllowOverride All
		Allow from all
	</Directory>

</VirtualHost>
```
### Habilitando VHost
```
cd /etc/apache2/sites-available/

sudo a2ensite laravel.conf

sudo service apache2 restart
```

### Adicionar no etc/host
```
sudo subl /etc/hosts
```
#### No final do arquivo
```
127.0.0.1 api.laravel
```
```
sudo service apache2 restart
```

### Habilitando Rewrite no apache
```
cd /etc/apache2/mods-available/

sudo a2enmod rewrite

sudo service apache2 restart
```

## Configurando BD

### Alterando arquivo .env
```
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=laravel
DB_USERNAME=laravel
DB_PASSWORD=laravel
```

### Criando User e Db
```
sudo su
su postgres
psql
--------------
create database laravel;
--------------
create user laravel password 'laravel';
--------------
alter database laravel owner to laravel;
--------------
\q
exit
exit
```
### Conectando no novo banco
```
psql -h localhost laravel laravel
```