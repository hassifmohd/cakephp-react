<?php
$dotenv = new \josegonzalez\Dotenv\Loader('config/.env');
$dotenv->parse()
    ->putenv()
    ->toEnv()
    ->toServer();

// cd \laragon\www\cakephp-react\app
// vendor\bin\phinx seed:run -s EventSeeder -c config\phinx.php -e development

return [
    "paths" => [
        "migrations" => "config/Migrations",
        "seeds" => "config/Seeds",
    ],
    "environments" => [
        "default_migration_table" => "phinxlog",
        "development" => [
            "adapter" => "mysql",
            "host" => $_ENV['DATABASE_HOST'],
            "name" => $_ENV['DATABASE_NAME'],
            "user" => $_ENV['DATABASE_USERNAME'],
            "pass" => $_ENV['DATABASE_PASSWORD'],
            "port" => $_ENV['DATABASE_PORT'],
            "charset" => "utf8",
        ],
    ],
];
