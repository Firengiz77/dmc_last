

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\FrontController;
use Illuminate\Support\Facades\App;
use App\Http\Controllers\Front\MainController;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\PaymentController;
use App\Services\PayriffService;
use App\Models\Order;
use Illuminate\Support\Facades\Http;
use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Admin\SponsorFormController;



Route::post('approveURL',[PaymentController::class,'paymentApproved'])->name('approveURL');


Route::get('approveURL', function () {

 
    \Session::flush();
    return redirect()->route('index')->with('info', __('Əməliyyat uğurla tamamlandı. Elektron dəvətnamənizi mail hesabınızdan əldə edə bilərsiniz!')); 
  
})->name('test');



Route::post('declineURL',[PaymentController::class,'paymentDeclined'])->name('declineURL');
Route::get('declineURL', function () {


    return redirect()->route('index')->with('error', __('Odenis heyata kecirile bilmedi')); 


});


Route::post('cancelURL',[PaymentController::class,'paymentCanceled'])->name('cancelURL');
Route::get('cancelURL', function () {


      return redirect()->route('index')->with('error', __('Odenis heyata kecirile bilmedi')); 
      

});







Route::get('language/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('locale');


Route::get('/',[MainController::class,'index'])->name('index');
Route::get('/news/{slug}',[MainController::class,'news_single'])->name('news_single');
Route::get('/news',[MainController::class,'news'])->name('news');
Route::get('/bilet_al',[MainController::class,'register_form'])->name('register_form');
Route::get('/sponsor_form',[MainController::class,'sponsor_form'])->name('sponsor_form');
Route::post('/subscribe',[MainController::class,'subscribe'])->name('subscribe');
Route::get('/tags/{slug}',[MainController::class,'tags'])->name('tags');

Route::get('/photos/{year}',[MainController::class,'photos'])->name('photo.year');
Route::get('/videos/{year}',[MainController::class,'videos'])->name('video.year');


Route::get('/basket',[MainController::class,'basket'])->name('basket');

Route::get('/add_to_cart/{id}',[MainController::class,'add_to_cart'])->name('add_to_cart') ; 
Route::get('/remove_from_cart',[MainController::class,'remove_from_cart'])->name('remove_from_cart');
Route::get('/increase_cart/{id}',[MainController::class,'increase_cart'])->name('increase_cart');
Route::get('/descrease_cart/{id}',[MainController::class,'descrease_cart'])->name('descrease_cart');
Route::get('/destroy_session',[MainController::class,'destroy_session'])->name('destroy_session');

Route::post('/add_registration',[RegistrationController::class,'create'])->name('create_registration');
Route::post('/add_sponsor_form',[SponsorFormController::class,'create'])->name('create_sponsor_form');

Route::get('/search/{q?}', [MainController::class, 'search'])->name('search');
Route::get('/media',[MainController::class,'media'])->name('media');
Route::post('/add_media',[MainController::class,'add_media'])->name('add_media');



// Clear application cache:
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return 'Application cache has been cleared';
});

//Clear route cache:
Route::get('/route-cache', function() {
	Artisan::call('route:clear');
    return 'Routes cache has been cleared';
});

//Clear config cache:
Route::get('/config-cache', function() {
 	Artisan::call('config:cache');
 	return 'Config cache has been cleared';
}); 

// Clear view cache:
Route::get('/view-clear', function() {
    Artisan::call('view:clear');
    return 'View cache has been cleared';
});




