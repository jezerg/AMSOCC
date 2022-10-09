<?php

use Illuminate\Support\Facades\Route;

use App\Models\Assets;
use App\Models\Build;
use App\Models\Dept;
use App\Models\GuestView;
use App\Models\view_asset_list;
use App\Models\view_build_list;
use App\Http\Controllers\AssetController;
use App\Http\Controllers\GuestViewController;
use App\Http\Controllers\BuildController;
use App\Http\Controllers\AssetViewController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\BuildViewController;

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



Route::group(['namespace' => 'App\Http\Controllers'], function()
{
    /**
     * Home Routes
     */
    Route::get('/', 'HomeController@index')->name('home.index');
    Route::get('/build', 'BuildController@index')->name('home.build');
    Route::get('/department', 'DepartmentController@index')->name('home.department');
    Route::get('/about', 'AboutController@index')->name('home.about');


    Route::group(['middleware' => ['guest']], function() {

        Route::get('/index','AssetViewController@show')->name('index');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });


    Route::group(['middleware' => ['auth']], function() {

        // Route::get('/',[AssetViewController::class,'show']);
        // Route::get('/','AssetViewController@show')->name('index');
        Route::get('/','AssetViewController@show')->name('index');
        Route::get('/build','BuildViewController@show')->name('build');


        /**
         *
         * Logout Routes
         */
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');

         /**
         * Register Routes
         */
        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');




        Route::post('/',function(){
            $asset = new Assets;
            $asset->name = request('name');
            $asset->details = request('details');
            $asset->serial = request('serial');
            $asset->category_id = request('category_id');
            $asset->status_id = request('status_id');
            $asset->quantity = request('quantity');
            $asset->build_id = request('build_id');
            $asset->dept_id = request('dept_id');

            $asset->save();

            return redirect('/')->with('success', 'Asset Saved');
        });

        Route::post('/build',function(){
            $build = new Build;
            $build->build_name = request('build_name');
            $build->serial = request('serial');
            $build->details = request('details');
            $build->status_id = request('status_id');
            $build->dept_id = request('dept_id');

            $build->save();

            return redirect('/build')->with('success', 'Build Saved');
        });

        Route::post('/department',function(){
            $dept = new Dept;
            $dept->dept_name = request('dept_name');
            $dept->details = request('details');

            $dept->save();

            return redirect('/department')->with('success', 'Department Saved');
        });

    });
});

//Route::get('/', function () {
//    return view('welcome');
//});
