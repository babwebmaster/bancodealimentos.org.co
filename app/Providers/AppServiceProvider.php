<?php

namespace App\Providers;

use App\Http\Controllers\web\BlogController;
use Carbon\Carbon;
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
        /**
         * Generate Date with library Carbon in other Languages
         */
        Carbon::setLocale(config('app.locale'));
        setlocale(LC_TIME, config('app.locale'));
        /**
         *  Generate data $posts in layout web for all views web
         */
        view()->composer(
            'layouts.web', 
            function ($view) {
                $blog = new BlogController();
                $posts = $blog->index();
                $view->with('posts', $posts);
            }
        );
    }
}
