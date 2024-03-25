<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;
use App\Models\Cart;
use Hash;
use Illuminate\Support\Facades\Auth;

class BaseController extends Controller
{
   public function home()
   {
    $categories=Category::whereNull('category_id')->get();
    //dd($categories);
    $products=Product::get();
    $new_products=Product::limit(6)->latest()->get();
    return view('front.home',compact('categories','products','new_products'));
   }  
   
   public function specialOffer()
   {
    $categories=Category::whereNull('category_id')->get();
    $offer_products = Product::whereIn('category_id', array(16, 17, 18))->get();
    return view('front.specialOffer',compact('offer_products','categories'));
   }

   public function faq()
   {
    return view('front.faq');
   }

   public function termsandConditions()
   {
    $categories=Category::whereNull('category_id')->get();
    return view('front.tac',compact('categories'));
   }


   public function delivery()
   {
    $categories=Category::whereNull('category_id')->get();
    return view('front.delivery',compact('categories'));
   }


  public function contact()
   {
     return view('front.contact');
   }

   public function cart()
   {
       $carts=array();
       $items_count=0;
       if(Auth::user())
       {
         $user_id=Auth::user()->id;
         $carts=Cart::where('user_id',$user_id)->get();
         $items_count=Cart::where('user_id',$user_id)->count();
       }
      
     $categories=Category::whereNull('category_id')->get();
     return view('front.cart',compact('categories','carts','items_count'));
   }

   public function productDetails(Request $request)
   {
     $id=$request->id;
     $categories=Category::whereNull('category_id')->get();
     $product=Product::where('id',$id)->with('ProductDetail')->first();
     $category_id=$product->category_id;
     $related_products=Product::where('category_id',$category_id)->get();
     return view('front.productDetails',compact('product','related_products','categories'));
   }

   public function products(Request $request)
   {
     $category_id=$request->id;
     $categories=Category::whereNull('category_id')->get();
     $category_name=Category::where('id',$category_id)->value('name');
     $products=Product::where('category_id',$category_id)->get();
     return view('front.products',compact('products','categories','category_name'));
   }

   public function user_login()
   {
     $categories=Category::whereNull('category_id')->get();
     return view('front.login',compact('categories'));
   }

   public function user_store(Request $request)
   {
    $data=array(
      'name'=>$request->firstname.' '.$request->lastname,
      'email'=>$request->email,
      'password'=>Hash::make($request->password),
      'role'=>'user'
  );
     $user=User::create($data);
     return redirect()->route('user_login');
   }

   public function loginCheck(Request $request)
   {
    $data=array(
      'email'=>$request->email,
      'password'=>$request->password
    );

    if(Auth::attempt($data)){
      return redirect()->route('home');
    }
    else{
      return back()->withErrors(['message'=>'Invalid Email or Password']);
    }
   }

   public function logout()
   {
    Auth::logout();
    return redirect()->route('user_login');
   }
   
}
