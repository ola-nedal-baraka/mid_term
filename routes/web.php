<?php

//use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExpenseController;

Route::get('all-products', [ExpenseController::class,'show']);
Route::post('STORE',[ExpenseController::class,'store'] );
Route::post('delete/{id}',[ExpenseController::class,'distroy'] );
Route::post('update/{id}',[ExpenseController::class,'goingToTheUpdate'] );
Route::post('up/{id}',[ExpenseController::class,'update'] );

route::get('/', function () {
    return view('app');
});

route::get('create-expense', function () {
    $action=0;
    return view('create-expense',compact(['action']));
});
?>