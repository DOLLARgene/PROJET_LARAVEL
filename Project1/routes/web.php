<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Postcontroler;

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

//Route::get('/', 'App\Http\Controlers\Postcontroler@index');
Route::get('/',[Postcontroler::class],'index');
/*Route::get('posts', function()
{
    return response() -> json([
        'title'=>'nom super titre',
        'description'=>'ma super description',
        'nom'=>'mon adorable nom'
    ]);
});
Route::get('articles',function()
{
    return view('articles');
});*/
