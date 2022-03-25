<?php

use App\Models\Blogs;
use Illuminate\Http\Request;
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

//Home Route
Route::get('/', function () {
    $posts  = blogs::Latest('created_at')-> get();

    return view('blogs', ['posts'=> $posts]);
});


//Submit New Blog
Route::post('blogs/store', function (Request $request){
    
    $request->validate([
        'slug'=>  ['required'],
        'title'=>  ['required'],
        'excerpt'=>  ['required'],
        'body'=>  ['required'],
    ]);
    $post = new Blogs;
    
    $post->slug = $request->slug;
    $post->title = $request->title;
    $post->excerpt = $request->excerpt;
    $post->body = $request->body;

    $post->save();

    return redirect()->to('/');

});

//Create Blog Route
Route::get('blogs/create', function(){
    return view('create');
});


//Blog Route
Route::get('/blog/{post:slug}', function (blogs $post) {

    return view('blog', ['post' => $post]);
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
