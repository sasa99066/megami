<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/to', function () {
    return view('to');
});

Route::get('/contact', function () {
    return view('contact');
});
Route::get('/cart', function () {
    return view('cart');
});
Route::get('/review', function () {
    return view('review');
});
Route::get('/review1', function () {
    return view('review1');
});
Route::get("/detail/",function(){
    $name = request("name");
    return view("detail",[
        "name" => $name
    ]);
});
Route::get("/detail/{item_id}",function($item_id){
    return view("detail",[
        "item_id" => $item_id
    ]);
});
Route::get("/top",function(){
    $items = DB::select("SELECT * FROM items");
    return view("index",[
        "items" => $items
    ]);
});
Route::get("/detail/{item_id}",function($itemId){
    $items = DB::select("SELECT * FROM items where id = ?",[$itemId]);
    if(count($items)){
        return view("detail1",[
            "item" => $items[0]
        ]);
    }else{
        return abort(404);
    }
});
Route::get("/session_test",function(){
    $count = request()->session()->get("COUNTER",0);
    $count = $count + 1;
    request()->session()->put("COUNTER",$count);
    return "{$count}回目のアクセスです";
});
// [POST] /cart/{item_id} カートの追加
Route::post("/cart/{item_id}",function($itemId){
    $items = DB::select("SELECT * FROM items where id = ?",[$itemId]);
    if(count($items)){
        $cartItems = request()->session()->get("CART",[]);
        $cartItems[] = $items[0];
        request()->session()->put("CART",$cartItems);
        return redirect("/cart");
    }else{
        return abort(404);
    }
});
// [GET] /cart カートの表示
Route::get("/cart",function(){
    $cartItems = request()->session()->get("CART",[]);
    return view("cart",[
        "cartItems" => $cartItems
    ]);
});
// [FORGET]　カートの削除
Route::get("/cartdelete",function(){
    $cartItems= request()->session()->forget("CART");
    return redirect("cart");
});

//購入画面
Route::get("buy",function(){
    return view("buy");
});

//購入処理
Route::post("buy",function(){
    $validator = Validator::make(request()->all(),[
        'name'=> ['required'],
        'email'=>['required'],
    ])->validate();
       //ここで購入情報を記録する。
    return redirect("thanks");
});

//購入後画面
Route::get("thanks",function(){
    return view("thanks");
});



Route::get("/review/{number}",function($number){
    $board = DB::select("SELECT * FROM board where number = ?",[$number]);
    if(count($board)){
        return view("review",[
            "board" => $board[0]
        ]);
    }else{
        return abort(404);
    }
});
Route::get("/review",function(){
    $boardlist = request()->session()->get("review",[]);
    return view("review",[
        "boardlist" => $boardlist
    ]);
});
Route::post("/review1/{number}",function($number){
    $board = DB::select("SELECT * FROM board where id = ?",[$number]);
    if(count($board)){
        $boardlist = request()->session()->get("REVIEW",[]);
        $boardlist[] = $board[0];
        request()->session()->put("REVIEW",$boardlist);
        return redirect("/review");
    }else{
        return abort(404);
    }
});
