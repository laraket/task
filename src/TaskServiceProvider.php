<?php

namespace Laraket\Task;

use Route;
use Illuminate\Support\ServiceProvider;

class TaskServiceProvider extends ServiceProvider
{
    
    public function boot()
    {
        
        Route::group(
            [
                'prefix' => 'task',
                'namespace' => 'Laraket\Task\Http\Controllers',
            ], 
            function () {
                require __DIR__ . "/../routes/web.php";
            }
        );
        
    }

    public function register()
    {

    }
}
