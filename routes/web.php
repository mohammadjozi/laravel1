<?php

use App\Models\Country;
use App\Models\Photo;
use App\Models\post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Video;
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
//
//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/insert','PostsController@insert');
////Route::get('/select','PostsController@select');
////Route::get('/update','PostsController@updatepost');
////Route::get('/delete','PostsController@deletepost');
//
//Route::get('/posts','PostsController@getAllPosts');
//Route::get('/save-post','PostsController@savepost');
//Route::get('/update-post','PostsController@newupdatepost');
//Route::get('/delete-post','PostsController@newdeletepost');
//Route::get('/data-trash','PostsController@workWithTrash');
//Route::get('/restore-post','PostsController@restorePost');
//Route::get('/force-delete-post','PostsController@forceDelete');

//one to one
//Route::get('user/{id}/post',function($id){
//
//    $user_post = User::find($id)->post->content;
//   return $user_post;
//
//});
//
//Route::get('post/{id}/user',function($id){
//
//    $post_user = Post::find($id)->user;
//    return $post_user;
//
//});

//Route::get('user/{id}/posts',function($id){
//
//    $user_post= User::find($id)->posts;
//
//    foreach($user_post as $post){
//
//        echo $post->content.'<br>';
//
//    }
//
//
//});

//Route::get('user/{id}/roles',function($id){
//
//    $user = User::find($id);
//    foreach($user->roles as $role){
//        echo $role->name.'<br>';
//
//    }
//
//});
//
//Route::get('user/pivot',function(){
//
//    $user = User::find(1);
//    foreach($user->roles as $role){
//
//        echo $role->pivot->created_at.'<br>';
//    }
//
//});

//Route::get('user/country',function(){
//
//    $country = Country::find(1);
//
//    foreach($country->posts as $post){
//
//        echo $post->title.'<br>';
//    }
//
//});

//Route::get('user/photos',function(){
//
//   $user = User::find(1);
//    foreach($user->photos as $photo){
//        echo $photo->path.'<br>';
//    }
//
//
//});
//
//Route::get('post/photos',function(){
//
//    $post = Post::find(2);
//    foreach($post->photos as $photo){
//        echo $photo->path;
//
//
//
//    }
//
//
//});
//
//Route::get('photo/{id}/post',function(){
//
//    $photo = Photo::find(1);
//    return $photo->image;
//
//});
//
//Route::get('post/tags',function(){
//
//    $post = Post::find(2);
//    foreach($post->tags as $tag){
//        echo $tag->name.'<br>';
//    }
//
//});
//
//Route::get('video/tags',function(){
//
//    $video = Video::find(1);
//    foreach($video->tags as $tag){
//        echo $tag->name.'<br>';
//    }
//
//});
//
//Route::get('tag/{id}/post',function($id){
//
//    $tag = Tag::find($id);
//    foreach($tag->posts as $post){
//      echo $post->title.'<br>';
//    };
//
//});
//
//Route::get('create',function(){
//
//    $user = User::find(1);
//    $post = new \App\Models\Post();
//    $post->title = 'بک پست با رابطه one to many';
//    $post->content = 'در این قسمت توضیحات مربوط به کانتنت قرار می گیرد';
//    $user->posts()->save($post);
//
//});
//
//Route::get('read',function(){
//
//    $user = User::find(1);
//    foreach($user->posts as $post){
//      echo $post->title.'<br>';
//    };
//
//});
//
//Route::get('update',function(){
//
//    $user = User::find(1);
//    $user->posts()->whereId(1)->update(['title'=>'پست شماره یک','content'=>'پست توسط اپدیت']);
//
//});
//
//Route::get('delete',function(){
//
//    $user = User::find(1);
//    $user->posts()->whereId(1)->delete();
//
//});
//
//Route::get('create',function(){
//   $user = User::find(1);
//   $role = new \App\Models\Role();
//   $role->name = 'نویسنده';
//   $user->roles()->save($role);
//});
//
//Route::get('read',function(){
//
//    $user = User::find(1);
//    foreach($user->roles as $role){
//
//        echo $role->name.'<br>';
//    };
//
//});
//
//Route::get('update',function(){
//
//    $user = User::find(1);
//    if($user->has('roles')){
//        foreach($user->roles as $role){
//            if($role->name == 'نویسنده'){
//                $role->name = 'Author';
//                $role->save();
//            }
//        }
//    }
//
//});
//
//Route::get('delete',function(){
//
//    $user = User::find(1);
//    foreach($user->roles as $role){
//        if($role->name == 'Author'){
//            $role->delete();
//        }
//    }
//
//});
//
//Route::get('detach',function(){
//
//    $user = User::find(1);
//    $user->roles()->detach();
//
//});
//
//Route::get('attach',function(){
//
//    $user = User::find(1);
//    $user->roles()->attach(1);
//
//});
//
//Route::get('sync',function(){
//
//    $user = User::find(1);
//    $user->roles()->sync([1]);
//
//});

//Route::get('create',function(){
//
//    $video = Video::find(1);
//    $video->tags()->create(['name'=>'morph video']);
//
//});

//Route::get('/read',function(){
//
//    $video = Video::find(1);
//    foreach($video->tags as $tag){
//
//        echo $tag->name.'<br>';
//    };
//
//
//
//});
//
//Route::get('/update',function(){
//
//    $video = Video::find(1);
//    $tag = $video->tags;
//    $newtags = $tag->where('id',3)->first();
//    $newtags->name = 'تگ جدید';
//    $newtags->save();
//
//});
//
//Route::get('/delete',function(){
//
//    $video = Video::find(1);
//    $tag = $video->tags;
//    $newtags = $tag->where('id',3)->first();
//    $newtags->delete();
//
//});
//
//Route::get('/detach',function(){
//
//    $video = Video::find(1);
//    $video->tags()->detach();
//
//});
//
//Route::get('/attach',function(){
//
//    $video = Video::find(1);
//    $video->tags()->attach(1);
//
//});
//
//Route::get('/sync',function(){
//
//    $video = Video::find(1);
//    $video->tags()->sync([1,2]);
//
//});

//Route::resource('/posts','PostsController');
//
//Route::get('file',function(){
//   return \Illuminate\Support\Facades\Storage::disk('files')->download('hero.jpg');
//});


Auth::routes(['verify'=>true]);


Route::middleware('auth')->group(function(){
  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
  Route::resource('/posts','PostsController');

});
Route::get('/');

//Route::get('/',function(){
//   $user = \Illuminate\Support\Facades\Auth::user();
//    if(\Illuminate\Support\Facades\Auth::check()){
//        echo 'Hello: '. $user->name;
//    }else{
//        return redirect()->to('home');
//    }
//
//});

Route::get('/admin',function(){

  echo"Hello to admin page";

})->middleware('isAdmin:مدیر');

Route::get('session',function(Request $request){

//  session(["email"=>"reza@gmail.com"]);
//  $request->session()->flush();
  $request->session()->keep('message');
  return $request->session()->all();
//  $request->session()->put(["username"=>"reza"]);
//  return $request->session()->get('username');

});
//یک تغییر ایجاد شد