<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/inicio', function (){
    return view ('inicio');
});

Route::post('/suma', function (Request $request){
    $num1 = $request->input('num1');
    $num2 = $request->input('num2');
    $suma = $num1 + $num2;
    return view('suma', ['resultado' => $suma]);
});

