# Welcome to NGO MMS

A proposal for NGO Member Management System.

## Screenshots

<table>
  <tr>
    <td><img src="screenshots/dashboard.png" width="400" alt="dashboard"></td>
    <td><img src="screenshots/organizations.png" width="400" alt="organizations"></td>
  </tr>
</table>

Generated on: 2024-04-29 01:11:49 (UTC)

Filapanel is your dynamic, user-friendly tool for accelerating Laravel application development. Built on the Filament framework, it provides a seamless approach for creating, configuring, and managing resources and models.

## Installed packages

No packages were selected to be installed.

## Further installation

Now that you've got your project, it's time to finish up installation. Please make sure to run the following commands
either in your local project or in your deployment tool.

### Run composer install

```
composer install
```

### Create your `.env`

```
cp .env.example .env
```

Now create a new database and enter the credentials inside your environment file.

### Set your app key

```
php artisan key:generate
```

### Upgrade Filament

```
php artisan filament:upgrade
```

### Run migrations

```
php artisan migrate:fresh
```

### Link storage

```
php artisan storage:link
```

### All as one command

```
composer install && 
cp .env.example .env &&
php artisan key:generate && 
php artisan filament:upgrade &&
php artisan migrate:fresh &&
php artisan storage:link
```
