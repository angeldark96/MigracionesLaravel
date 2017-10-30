## Comando para inicializar db:stament o change() en Laravel

composer require doctrine/dbal
composer update 

## Ejemplo de uso

[https://styde.net/modificando-migraciones-en-laravel/](url)

## Crea la migracion

php artisan make:migration alter_profiles_table --table=profiles

## Clonar un proyecto laravel

1. Te situas en tu servidor de apache y clonas el archivo git clone htt.. 

2. composer install   - composer update(luego de actualizar) 

3. Creas una base de datos en phpmyadmin y pones el nombre de la base de datos
    cogetamiento : utf8-general-ui

4. cp .env.example .env  
        app_debug=false
        db_database=?
        db_username=?
        db_password=?

5. php artisan key:generate 

6. php artisan migrate --seed
  

