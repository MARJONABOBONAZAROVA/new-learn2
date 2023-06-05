<?php

use App\Http\Controllers\Admin\HumanController;
use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\Admin\InfoController;
use App\Http\Controllers\Admin\NumberController;


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

/* Route::get('/', function () {
    return view('welcome');
});

Route::get('about/user',function(){
    return view('about');

})->name('about');

///////////////////////////////////////////// users

Route::prefix('users/')->name('users.')->group(function(){


    Route::get('contact',function(){
        return view('users.contact');
    })->name('contact');

    Route::get('home',function(){
        return view('users.home');
    })->name('home');

    Route::get('server',function(){
        return view('users.server');
    })->name('server');

    Route::get('admin',function(){
        return view('users.admin');
    })->name('admin');

    Route::get('index',function(){
        return view('users.index');
    })->name('index');

    Route::get('about1',function(){
        return view('users.about1');
    })->name('about1');

    Route::get('content',function(){
        return view('users.content');
    })->name('content');

    Route::get('link',function(){
        return view('users.link');
    })->name('link');

    Route::get('portfolio',function(){
        return view('users.portfolio');
    })->name('portfolio');

    Route::get('project',function(){
        return view('users.project');
    })->name('project');

});

 */
/* Route::get('/',[PagesController::class, 'welcome'])->name('welcome');

Route::get('/',[PagesController::class, 'about'])->name('about');

Route::get('/',[PagesController::class, 'contact'])->name('contact');
?>
 */

Route::get('/',[PagesController::class, 'welcome'])->name('welcome');
Route::get('/groups',[PagesController::class, 'groups'])->name('grpups');
Route::get('/teachers', [PagesController::class, 'teachers'])->name('teachers');
Route::get('/wins', [PagesController::class, 'wins'])->name('wins');
Route::get('/gallery', [PagesController::class, 'gallery'])->name('gallery');
Route::get('/blogs', [PagesController::class, 'blogs'])->name('blogs');

Route::post('/order/store', [PagesController::class, 'store'])->name('order.store');


//Admin routes start
Route::prefix('admin/')->name('admin.')->middleware('auth')->group(function(){
    Route::get('dashboard',function(){
        return view('admin.layouts.dashboard');
    })->name('dashboard');

    Route::resource('infos',InfoController::class);

    /* Route::get('infos/index', [InfoController::class, 'index'])->name('infos.index');
    Route::get('infos/create', [InfoController::class, 'create'])->name('infos.create');
    Route::post('infos/store', [InfoController::class, 'store'])->name('infos.store');
    Route::get('infos/show/{id}', [InfoController::class, 'show'])->name('infos.show');
    Route::get('infos/edit/{id}', [InfoController::class, 'edit'])->name('infos.edit');
    Route::put('infos/update/{id}', [InfoController::class, 'update'])->name('infos.update');
    Route::delete('infos/destroy/{id}', [InfoController::class, 'destroy'])->name('infos.destroy');
 */

});
