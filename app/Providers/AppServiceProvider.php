<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Cart;

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
        
        View::composer('front.layout.header', function ($view) {
            $carts=array();
        $items_count=0;
        if(Auth::user())
       {
         $user_id=Auth::user()->id;
         $username=User::where('id',$user_id)->value('name');
         $carts=Cart::where('user_id',$user_id)->get();
         $items_count=Cart::where('user_id',$user_id)->count();
       }
       else{
        $username="User";
       }
            $view->with(array('username'=>$username,'items_count'=>$items_count,'carts'=>$carts)); // Replace 'variable' and 'value' with your actual data
        });
    }
}
