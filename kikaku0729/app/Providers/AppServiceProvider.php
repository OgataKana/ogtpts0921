<?php

namespace App\Providers;
use Event;
use App\Post;
use App\Events\Posted;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);  
        // チャットで発言されたら、発火
       Post::created(function ($message) {
           Event::fire(new Posted($message));
       });
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
