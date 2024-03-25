<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Category;
use App\Models\Product;

class AdminController extends Controller
{
    public function login()
    {
       
        return view('admin.login');
    }

    public function makeLogin(Request $request)
    {

        $data=array('email'=>$request->email,
                    'password'=>$request->password,
                    'role'=>'admin'
                );
        if(Auth::attempt($data))
        {
           return redirect()->route('admin.dashboard');
        }   
        else{
            return back()->withErrors(['message'=>'Invalid Email or Password']);
        }         
    }

    public function dashboard()
    {
        $userCount = User::count();
        $categoryCount = Category::whereNull('category_id')->count();
        $subcategoryCount=Category::whereNotNull('category_id')->count();
        $productCount = Product::count();
        return view('admin.dashboard', compact('userCount','categoryCount','subcategoryCount','productCount'));
        
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}
