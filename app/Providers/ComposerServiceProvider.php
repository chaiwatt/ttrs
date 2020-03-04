<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use View;
class ComposerServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        View::composer('*','App\Http\ViewComposers\ShareComposer');
    }
}
