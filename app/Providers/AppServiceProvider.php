<?php

namespace App\Providers;

use Illuminate\Http\Request;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(Request $request)
    {
        if ($request->segment(1) == 'panel')
            View()->share('class', 'sidebar-dark-blue');

        if ($request->segment(2) == 'reuniao')
            View()->share('class', 'sidebar-dark-info');

        if ($request->segment(2) == 'minuto-hse')
            View()->share('class', 'sidebar-dark-success');

        if ($request->segment(2) == 'epi')
            View()->share('class', 'sidebar-dark-pink');

        if ($request->segment(2) == 'permissao-de-trabalho')
            View()->share('class', 'sidebar-dark-orange');

        if ($request->segment(2) == 'inspecao')
            View()->share('class', 'sidebar-dark-purple');

        if ($request->segment(2) == 'nao-conformidade')
            View()->share('class', 'sidebar-dark-red');

        if ($request->segment(2) == 'ocorrencia')
            View()->share('class', 'sidebar-dark-yellow');

        if ($request->segment(2) == 'hse')
            View()->share('class', 'sidebar-dark-success');

        if ($request->segment(2) == 'emergencia')
            View()->share('class', 'sidebar-dark-red');

        if ($request->segment(2) == 'qualidade')
            View()->share('class', 'sidebar-dark-orange');

        if ($request->segment(2) == 'producao')
            View()->share('class', 'sidebar-dark-info');

        if ($request->segment(2) == 'rh')
            View()->share('class', 'sidebar-dark-red');
    }
}
