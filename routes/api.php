<?php

use Illuminate\Http\Request;
use App\Models\Article;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('articles', 'ArticleController@index');
Route::get('articles/{id}', 'ArticleController@show');
Route::post('articles', 'ArticleController@store');
Route::put('articles/{id}', 'ArticleController@update');
Route::delete('articles/{id}', 'ArticleController@delete');

Route::post('register', 'RegisterController@register');

Route::get('cars', 'CarController@index');
Route::get('cars/{id}', 'CarController@show');
Route::post('cars', 'CarController@store');
Route::put('cars/{id}', 'CarController@update');
Route::delete('cars/{id}', 'CarController@delete');


Route::get('customers', 'CustomerController@index');
Route::get('customers/{id}', 'CustomerController@show');
Route::post('customers', 'CustomerController@store');
Route::put('customers/{id}', 'CustomerController@update');
Route::delete('customers/{id}', 'CustomerController@delete');


Route::get('sales', 'SalesController@index');
Route::get('sales/{id}', 'SalesController@show');
Route::post('sales', 'SalesController@store');
Route::put('sales/{id}', 'SalesController@update');
Route::delete('sales/{id}', 'SalesController@delete');


// Route::get('articles', function() {
//     // If the Content-Type and Accept headers are set to 'application/json',
//     // this will return a JSON structure. This will be cleaned up later.
//     return Article::all();
// });

// Route::get('articles/{id}', function($id) {
//     return Article::find($id);
// });

// Route::post('articles', function(Request $request) {
//     return Article::create($request->all);
// });

// Route::put('articles/{id}', function(Request $request, $id) {
//     $article = Article::findOrFail($id);
//     $article->update($request->all());

//     return $article;
// });

// Route::delete('articles/{id}', function($id) {
//     Article::find($id)->delete();

//     return 204;
// });
