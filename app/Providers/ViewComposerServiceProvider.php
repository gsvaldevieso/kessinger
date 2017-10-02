<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Auth;
use App\Profile;
use View;
use Illuminate\Support\Facades\Storage;

class ViewComposerServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function($view)
        {
            $usuarioAtual = Profile::where('user_id', Auth::user()->id)->first();
            $userPicture = Storage::url($usuarioAtual->profilePic);
            $view->with('picture', $userPicture);
        });
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
