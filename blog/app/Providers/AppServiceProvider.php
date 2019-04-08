<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
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
    public function boot()
    {
      collect([
        'input' => 'components.form.text',
        'textarea' => 'components.form.textarea',
        'submit' => 'components.form.submit',
        'delete' => 'components.form.delete',
        'number' => 'components.form.number'
      ])->each(function($view, $alias) {
        Blade::include($view,$alias);
      });
    }
}
