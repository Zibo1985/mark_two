<?php

namespace App\Providers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }
    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        DB::listen(function ($query) {

            foreach ($query->bindings as $value) {
                $position = strpos($query->sql, '?');
                if ($position !== false) {
                    $query->sql = substr_replace($query->sql, $value, $position, 1);
                }
            }
            $queryResult = date('Y.m.d H:i:s') .PHP_EOL . '  ->  ' . $query->sql;

            File::append(
                storage_path('/logs/query.log'),
                $queryResult . PHP_EOL . PHP_EOL
            );
        });
    }
}
