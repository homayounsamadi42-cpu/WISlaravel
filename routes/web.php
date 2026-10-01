<?php
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\PagesController;
// Route::resource("/pages",PagesController::class);
// use App\Http\Controllers\PostsController;
// use App\Http\Controllers\Posts\PagesController;
Route::get('/', function () {
    return view('home',[
        'course'=>'web inforamtion systems'
   ]);
   
});

Route::get("/about",function(){
    return view("about");
});






// Route::get("/contact",function(){
// return view("contact");
// });


// // Route::get("/user/{id?}",function($id="none"){
// //     return "user Id:".$id;
// // });


// Route::post("/create_new_post",function(){
//     return "post created successfully!";
// })->name('post.create');

// Route::any("/create-product",function(){
//     return "product created successfully!";
// });

 




// ============source controller==============

// Route::resource("/posts",PostsController::class);





?>