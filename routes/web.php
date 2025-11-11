<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\Website\Auth\AuthController;
use App\Http\Controllers\Website\Homes\HomesController;
use App\Http\Controllers\Website\Abouts\AboutsController;
use App\Http\Controllers\Website\Shops\ShopsController;
use App\Http\Controllers\Website\Contacts\ContactsController;
use App\Http\Controllers\Website\Blogs\BlogsController;
use App\Http\Controllers\Website\Pages\PagesController;
Route::get('/cache-clear', function (){
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('config:clear');
    Artisan::call('route:clear');    
    return redirect(route('home.index'))->with('success', 'Cache cleared successfully!');    
})->name('cacheClear');

Route::controller(AuthController::class)->group(function () {
    Route::get('/login',  'showLoginForm')->name('login');
    // Route::post('/login', 'login');
    Route::post('/login', 'sendOtp')->name('sendOtp');
    Route::post('/logout', 'logout')->name('logout');
    Route::get('/myacount', 'myacount')->name('myacount');
    Route::get('/register',  'showRegistrationForm')->name('register');
    Route::post('/register',  'register');   
    Route::post('/verify-otp','verifyOtp')->name('verifyOtp');

});




Route::controller(HomesController::class)->group(function () {
    Route::get('/', 'index')->name('home.index');
    Route::post('/send-mail', 'sendmail')->name('send.mail');
});

Route::controller(AboutsController::class)->group(function () {
    Route::get('/about', 'index')->name('about.index');
    Route::get('/why-curecomm', 'curecomm')->name('about.curecomm');
    Route::get('/our-client', 'ourclient')->name('about.ourclient');
});
Route::controller(ShopsController::class)->group(function () {
    Route::get('/shop', 'shop')->name('shop.shop');
    Route::get('/shop/detail/{id}', 'shopdetail')->name('shop.shopdetail');

    // Show cart page
    Route::get('/cart','cart')->name('shop.Cart');
    Route::post('/cart', 'cartStoreOrUpdate')->name('shop.cartStore');

    Route::post('/cart/update','cartUpdate')->name('cartUpdate');
    Route::delete('/cart/delete/{id}','delete')->name('cart.delete');

    Route::get('/checkout','chekout')->name('checkout');
    Route::post('/phonepe/pay',  'pay')->name('phonepe.pay');

    Route::get('/get-location/{pincode}', 'getLocation')->name('getLocation');
    Route::post('order','order')->name('order');
    Route::get('wishlist','wishlist')->name('wishlist');   
    Route::get('myorder','myorder')->name('myorder');   
      
});


Route::controller(ContactsController::class)->group(function () {
    Route::get('/contact', 'contact')->name('contact.contact');
   
});
Route::controller(BlogsController::class)->group(function () {
    Route::get('/blog', 'blog')->name('blog.blog');
    Route::get('/blog-Detail', 'blogdetail')->name('blog.blogdetail');
    Route::get('/blogfirst', 'blogfirst')->name('blogfirst');
    Route::get('/blogsecond', 'blogsecond')->name('blogsecond');
    Route::get('/blogthird', 'blogthird')->name('blogthird');
    Route::get('/blogfourth', 'blogfourth')->name('blogfourth');
    Route::get('/blogfifth', 'blogfifth')->name('blogfifth');
    Route::get('/blogsixth', 'blogsixth')->name('blogsixth');
   
});
Route::controller(PagesController::class)->group(function () {
    Route::get('/privacy-policy', 'privacypolicy')->name('page.privacypolicy');
    Route::get('/terms-condition', 'termcondition')->name('page.termcondition');   
});
 

