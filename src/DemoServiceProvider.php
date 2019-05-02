<?php

namespace Lastmile\Lmidemo;

use Illuminate\Support\ServiceProvider;

class DemoServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
       
    }

    public function boot()
    {
        //
        // dd('this is not loaded');
        
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

    }
}
