<?php
namespace LaravelPH\LaravelToDo;

use Illuminate\Support\ServiceProvider;

class TodoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes/web.php';
        $this->app->make('LaravelPH\LaravelToDo\TodoController');

        if ($this->app->runningInConsole()) {
            $this->registerMigrations();
        }
    }

    /**
     * Register Passport's migration files.
     *
     * @return void
     */
    protected function registerMigrations()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');

        $this->publishes([
            __DIR__.'/../database/migrations' => database_path('migrations'),
        ]);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
