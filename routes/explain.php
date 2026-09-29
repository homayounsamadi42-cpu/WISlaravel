<?php

Understading Routes(web.php)
In laravel,routes define how your app responds to a URL
they connect a web address to a specific action
ex: showing a page or calling a controller method


where are routes defined?
all web routes defined in :
routes/web.php

this file contains the pathes that handle browser requests
ex: https://localhost:8000/aboute

Get method handling

Route::get("/",function(){
    return "wellcome to my laravel app";
})


here is what happens basically:
Route::get-> meanse this route responds to a get request.
"/"-> is the url path(the homepage).
the function inside runs when someone visits that page.
the route returns a response(like text,view or redirect).


returning a view:
 Route::get("/about",function(){
    return view("about");
 })

this loads the resources/views/about.blade.php file.(.blade is neccessary).
it is how you connect a url to a blade view(HTML page).


Routes with parameters

Route::get("/user/{id}",function($id){
    return "user id:".$id;
})

{id}-> a dynamic parameter.
$id-> is aotumatically recevid in the function.
{id?} if the id leaved empty then funcion($id="x") will be the default value.





==========================part 2===============================

Named Routes:
you can name routes to make linking easier.

Route::get('/dashboard',function(){
    return view('dashboard');
})->name('dashboard');   no matter what is writtin inside url,it will 
always work with the value inside name().

now you can link to it with:
route('dashboard');









=================part 3==================

Controllers:
Controllers are classes that group realated request-handling logics together.
they help to keep your routes file clean and make your app more organaized-specialy as it grows.



Connnecting to a controller
Instead of putting logic inside the  route, you can link it to a controller method
    use App/HTTP/controlers/PageController;
    Route::get('/contact',[PageController::class,"contact"]);


this means:
Laravel will call the contact() method inside PageController.php

1.why we use controllers:

without controllers, all of your logic lives inside routes:
    Route::get("/contact",function(){
        $name="ahmad";
        return view('about',compact('name'));
    });

    👍it works fine with small projects
    🙅but when it grows,it become messy.
    😎that when controllers come in- separates logic from routes




2.how to make a controller:
open another cli(eg git bush)inside your projects folder.
type: php artisan make:controller controlerFoldername/controlerName    
it will create the controller in this location:
app/Http/controllers/controllerFoldername/controllerName.php.


3.how to use it:

first of all import your controller to web.php file:
    use APP/Http/ControllersPosts/PagesController;
make the Route:: method:
    Route::get("/contact-page",[PagesController::class,"contact"])//contact is the name of the function inside the PagesController.php class
        return "some text";
        return view("contact"); it must be inside the views folder.

PagesController::class -> points to the controller.
"contact"-> name of the method inside that controller.
when we visit/about, laravel calls about() method and loads the route.

4.sending data to controller using compact() method and [] array:

===================part 2====================

what is a resource controller

a resource controller in laravel is a special controller that automatically provides methods 
for all common crud operations(Create,Read,Update,Delete).
it saves time you write a baunch(group) of seprate routes menually.

1.🏗️how to create a resource controller:
you can create one with this command:
    php artisan make:controller PostController --resorce

this creates a controller here:
    app/Http/controllers/PostController.php .
2.inside the resource controller:

when you open the file, you can see laravel has added 7 CRUD methods . 
each method has its own specific role 
and laravel knows which one call automatically depending on the route type(GET ,POST ,PUT ,Delete). 


3.Registering resource route:
in order to register it just go inside the routes/web.php:
    use app/Http/controllers/PostController.php 

    Route::resource('post',PostController::class)

this single line of codes automatically creates all 7 routes:

 Http verb      url             controller method       purpose
 GET            /posts           index()                show all posts
 GET            /post/create    create()                show form to create a new post
 POST           /posts           store()                 saves a new post 
 GET            /post/{id}      show()                  show one post 
 GET            /post{id}/edit  edit()                  show edit form 
 PUT/PATCH      /post{id}       update()                Update post 
 DELETE         /post/{id}      delete()                delete post 
 
 
4.example: showing all the posts:

inside postsController.php:

public function index()
    {
        $post="all posts";
        return $post;
    }

?>