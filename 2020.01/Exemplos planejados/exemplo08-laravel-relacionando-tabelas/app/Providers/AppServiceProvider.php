<?php
namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        // DEFININDO TAMANHO MÁXIMO DOS CAMPOS DE TEXTO.
        Schema::defaultStringLength(191);

        // HABILITANDO A RESTRIÇÃO DE CHAVE ESTRANGEIRA.
        Schema::enableForeignKeyConstraints();
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
