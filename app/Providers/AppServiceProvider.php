<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;

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
        Paginator::useBootstrap();
        Schema::defaultStringLength(191);
        view()->composer(
            'front.includes.footer',
            function ($view) {
                $data=setting('work-time-table');
                if($data){
                    $data=json_decode($data);
                }
                else{
                    $data='';
                }
                $view->with('timeTable',$data);
            }
        );
    }
}
