# Environment Log

Changes to the environment and tools installed are listed here.

- Mix was installed then uninstalled: ```npm uninstall laravel-mix```, mix-manifest.json was deleted. Currently, vite is being used. <b>(04/03/2024)</b>
- jQuery was added: ```npm install jquery```. The following was added to bootstrap.js <b>(04/03/2024)</b>

    ```
    import jQuery from 'jquery';
    window.$ = jQuery;
    ```

- ```migrate:rollback``` was ran Migrations that were rolled back: <b>(04/03/2024)</b>

    2019_12_14_000001_create_personal_access_tokens_table
    2019_08_19_000000_create_failed_jobs_table
    2014_10_12_100000_create_password_reset_tokens_table
    2014_10_12_000000_create_users_table

    deleted migrations from database/migrations

    ```
    composer dumpautoload
    ```
    to get rid of class from autoload_classmap.php.

    Deleted "'App\\Models\\User' => $baseDir . '/app/Models/User.php'," from vendor/composer/autoload_classmap.php as composer dumpautoload didn't work.

- Create Account model ```php artisan make:model Account``` <b>(04/03/2024)</b>

- Added typescript jquery definitions ```npm install --save-dev @types/jquery``` <b>(09/03/2024)</b>

- Removed typescript jquery definitions ```npm uninstall --save-dev @types/jquery``` <b>(09/03/2024)</b>

- Install axios ```npm install axios``` <b>(09/03/2024)</b>