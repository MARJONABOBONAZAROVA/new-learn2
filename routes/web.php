<?php

use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Return_;

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
/////////////////////////////////////2 manager

Route::prefix('manager/')->name('manager.')->group(function(){


    Route::get('contact',function(){
        return view('manager.contact');
    })->name('contact');

    Route::get('home',function(){
        return view('manager.home');
    })->name('home');

    Route::get('server',function(){
        return view('manager.server');
    })->name('server');

    Route::get('admin',function(){
        return view('manager.admin');
    })->name('admin');

    Route::get('index',function(){
        return view('manager.index');
    })->name('index');

    Route::get('about1',function(){
        return view('manager.about1');
    })->name('about1');

    Route::get('content',function(){
        return view('manager.content');
    })->name('content');

    Route::get('link',function(){
        return view('manager.link');
    })->name('link');

    Route::get('portfolio',function(){
        return view('manager.portfolio');
    })->name('portfolio');

    Route::get('project',function(){
        return view('manager.project');
    })->name('project');

});

/////////////////////////////////////3 admin

Route::prefix('admin/')->name('admin.')->group(function(){


    Route::get('contact',function(){
        return view('admin.contact');
    })->name('contact');

    Route::get('home',function(){
        return view('admin.home');
    })->name('home');

    Route::get('server',function(){
        return view('admin.server');
    })->name('server');

    Route::get('admin',function(){
        return view('admin.admin');
    })->name('admin');

    Route::get('index',function(){
        return view('admin.index');
    })->name('index');

    Route::get('about1',function(){
        return view('admin.about1');
    })->name('about1');

    Route::get('content',function(){
        return view('admin.content');
    })->name('content');

    Route::get('link',function(){
        return view('admin.link');
    })->name('link');

    Route::get('portfolio',function(){
        return view('admin.portfolio');
    })->name('portfolio');

    Route::get('project',function(){
        return view('admin.project');
    })->name('project');

});

////////////////////////////////////////4 client

Route::prefix('client/')->name('client.')->group(function(){


    Route::get('contact',function(){
        return view('client.contact');
    })->name('contact');

    Route::get('home',function(){
        return view('client.home');
    })->name('home');

    Route::get('server',function(){
        return view('client.server');
    })->name('server');

    Route::get('admin',function(){
        return view('client.admin');
    })->name('admin');

    Route::get('about1',function(){
        return view('client.about1');
    })->name('about1');

    Route::get('index',function(){
        return view('client.index');
    })->name('index');

    Route::get('content',function(){
        return view('client.content');
    })->name('content');

    Route::get('link',function(){
        return view('client.link');
    })->name('link');

    Route::get('portfolio',function(){
        return view('client.portfolio');
    })->name('portfolio');

    Route::get('project',function(){
        return view('client.project');
    })->name('project');

});







/* Route::get('user/{a}',function($a){
    $p = 4 * $a;
    return $p;

}); */
/* Route::get('user/{name}/{id}',function($name, $id){
    return "Welcome $id - $name";

}); */
/* Route::get('user/{a}/{b}',function($a, $b){
    $p = $a * $b;
    return $p;
}); */

/* Route::get('user/{b}',function($b){
    $k = floor($b/1024);
    return $k;

}); */
/* Route::get('user/{a}/{b}',function($a,$b){
    return floor($a/$b);


}); */
/* Route::get('user/{n}',function($n){
    if($n>0)
        return ++$n;

    else
        return $n;
}); */
/* Route::get('user/{a}',function($a,$b,){
    $a = $a+$b/2;
    return $a;

});
 */
/* function geometric_mean($a, $b) {
    return sqrt($a * $b);
  }

  $number1 = 8;
  $number2 = 12;

  $result = geometric_mean($number1, $number2);

  echo "The geometric mean of " . $number1 . " and " . $number2 . " is " . $result;


 */
/* Route::get('user/{a}/{b}',function($a,$b,){
    if($b < $a);
    {
        $c = $a;
        $a = $b;
    }
    return "a = $a, b = $b";

})
 */
Route::get('/',[PagesController::class, 'welcome'])->name('welcome');

Route::get('/',[PagesController::class, 'about'])->name('about');

Route::get('/',[PagesController::class, 'contact'])->name('contact');
?>
