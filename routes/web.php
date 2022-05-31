<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
 */

Route::get('/login', function () {
    return view('login');
});

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::post("/login", [UserController::class, 'login']);
Route::post("register", [UserController::class, 'register']);
Route::get("/", [ProductController::class, 'index']);
Route::get("detail/{id}", [ProductController::class, 'detail']);
Route::get("search", [ProductController::class, 'search']);
Route::post("add_to_cart", [ProductController::class, 'addtocart']);
Route::get("cartlist", [ProductController::class, 'cartList']);
Route::get("removecart/{id}", [ProductController::class, 'removeCart']);
Route::get("ordernow", [ProductController::class, 'orderNow']);
Route::post("orderplace", [ProductController::class, 'orderPlace']);
Route::get("myorders", [ProductController::class, 'myOrders']);

Route::get('welcome', function () {
    //$actor0 = DB::table('products')->where('category', '=', 'Tv')->get();
    //return $actor0;

    //$actor1 = DB::table(table:'products')->where(column:'category', operator:'=', value:"mobile")->get();
    //return $actor1;

    //$actor3 = DB::table(table:'products')->where([['category', 'mobile'], ['price', '2000']])->get();
    //return $actor3;

    //$actor4 = DB::table(table:'products')->where(function ($query) {$query->where('price', '1560');})->get();
    //return $actor4;

    /* $actor5 = DB::table(table:'products')->select(['category', DB::raw(value:'count(*) AS totalcate')])
    ->groupBy(group:'category')
    ->orderBy(column:'totalcate', direction:'desc')->get();
    return $actor5;*/

    /* $actor6 = DB::table(table:'products')
    ->select(['name', 'category'])
    ->whereIn('price', ['1200', '2000'])
    ->orderBy('price', direction:'DESC')
    ->get();

    return $actor6; */

    /*$actor7 = DB::table(table:'products')
    ->select(['id', 'name', 'category', 'price'])
    ->where('price', 1560)
    ->orwhere('price', 1000)
    ->orderBy('price', direction:'DESC')
    ->get();

    return $actor7;*/

    $join = DB::table(table:'users AS u')
        ->select(['u.name', 'u.email', 'p.name', 'p.price', 'o.payment_status', 'o.address'])
        ->leftJoin('orders AS o', 'u.id', '=', 'o.user_id')
        ->leftJoin('products AS p', 'o.product_id', '=', 'p.id')
        ->orderBy('price', direction:"DESC")
        ->limit(value:2)
        ->get();
    return $join;
});
