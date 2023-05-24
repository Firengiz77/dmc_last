<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\LanguageController;
use App\Http\Controllers\Admin\NewsController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\ProgramController;
use App\Http\Controllers\Admin\SpikerController;
use App\Http\Controllers\Admin\SupporterController;
use App\Http\Controllers\Admin\SponsorController;
use App\Http\Controllers\Admin\RegistrationController;
use App\Http\Controllers\Admin\SponsorFormController;
use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\PhotosController;
use App\Http\Controllers\Admin\VideosController;
use App\Http\Controllers\Admin\EventController;
use App\Http\Controllers\Admin\ModeratorController;
use App\Http\Controllers\Admin\DatesController;
use App\Http\Controllers\Admin\SubscribeController;
use App\Http\Controllers\Admin\MetaController;
use App\Http\Controllers\Admin\ProjectController;
use App\Http\Controllers\Admin\TicketsController;
use App\Http\Controllers\Admin\MediaController;



Route::prefix('admin')->name('admin.')->middleware('admin')->group(function () {
    // admin routes


 // language routes
 Route::get('/language',[LanguageController::class,'index'])->name('language');
 Route::get('/language/edit/{id}',[LanguageController::class,'edit'])->name('language_edit');
 Route::post('/language/add',[LanguageController::class,'store'])->name('language_add');
 Route::get('/language/show',[LanguageController::class,'show'])->name('language_show');
 Route::post('/language/update/{id}',[LanguageController::class,'update'])->name('language_update');
 Route::get('/language/delete/{id}',[LanguageController::class,'destroy'])->name('language_delete');

 // news routes
 Route::get('/news',[NewsController::class,'index'])->name('news');
 Route::get('/news/edit/{id}',[NewsController::class,'edit'])->name('news_edit');
 Route::post('/news/add',[NewsController::class,'store'])->name('news_add');
 Route::get('/news/show',[NewsController::class,'show'])->name('news_show');
 Route::post('/news/update/{id}',[NewsController::class,'update'])->name('news_update');
 Route::get('/news/delete/{id}',[NewsController::class,'destroy'])->name('news_delete');

  // tag routes
  Route::get('/tags',[TagController::class,'index'])->name('tags');
  Route::get('/tags/edit/{id}',[TagController::class,'edit'])->name('tags_edit');
  Route::post('/tags/add',[TagController::class,'store'])->name('tags_add');
  Route::get('/tags/show',[TagController::class,'show'])->name('tags_show');
  Route::post('/tags/update/{id}',[TagController::class,'update'])->name('tags_update');
  Route::get('/tags/delete/{id}',[TagController::class,'destroy'])->name('tags_delete');
 
// programs routes
Route::get('/programs',[ProgramController::class,'index'])->name('programs');
Route::get('/programs/edit/{id}',[ProgramController::class,'edit'])->name('programs_edit');
Route::post('/programs/add',[ProgramController::class,'store'])->name('programs_add');
Route::get('/programs/show',[ProgramController::class,'show'])->name('programs_show');
Route::post('/programs/update/{id}',[ProgramController::class,'update'])->name('programs_update');
Route::get('/programs/delete/{id}',[ProgramController::class,'destroy'])->name('programs_delete');

// spikers routes
Route::get('/spikers',[SpikerController::class,'index'])->name('spikers');
Route::get('/spikers/edit/{id}',[SpikerController::class,'edit'])->name('spikers_edit');
Route::post('/spikers/add',[SpikerController::class,'store'])->name('spikers_add');
Route::get('/spikers/show',[SpikerController::class,'show'])->name('spikers_show');
Route::post('/spikers/update/{id}',[SpikerController::class,'update'])->name('spikers_update');
Route::get('/spikers/delete/{id}',[SpikerController::class,'destroy'])->name('spikers_delete');

// sponsor routes
Route::get('/sponsors',[SponsorController::class,'index'])->name('sponsors');
Route::get('/sponsors/edit/{id}',[SponsorController::class,'edit'])->name('sponsors_edit');
Route::post('/sponsors/add',[SponsorController::class,'store'])->name('sponsors_add');
Route::get('/sponsors/show',[SponsorController::class,'show'])->name('sponsors_show');
Route::post('/sponsors/update/{id}',[SponsorController::class,'update'])->name('sponsors_update');
Route::get('/sponsors/delete/{id}',[SponsorController::class,'destroy'])->name('sponsors_delete');

// support routes
Route::get('/support',[SupporterController::class,'index'])->name('support');
Route::get('/support/edit/{id}',[SupporterController::class,'edit'])->name('support_edit');
Route::post('/support/add',[SupporterController::class,'store'])->name('support_add');
Route::get('/support/show',[SupporterController::class,'show'])->name('support_show');
Route::post('/support/update/{id}',[SupporterController::class,'update'])->name('support_update');
Route::get('/support/delete/{id}',[SupporterController::class,'destroy'])->name('support_delete');


// registration routes
Route::get('/registration',[RegistrationController::class,'index'])->name('registration');
Route::get('/registration/show/{id}',[RegistrationController::class,'show'])->name('registration_show');
Route::post('/add_registration',[RegistrationController::class,'create'])->name('create_registration');
Route::get('/qeydiyyatdan_kecenler/show/{status}',[RegistrationController::class,'qeydiyyatdan_kecenler'])->name('qeydiyyatdan_kecenler');


// sponsor form routes
Route::get('/sponsor_form',[SponsorFormController::class,'index'])->name('sponsor_form');
Route::get('/sponsor_form/show/{id}',[SponsorFormController::class,'show'])->name('sponsor_form_show');

// sponsor form routes
Route::get('/media',[MediaController::class,'index'])->name('media');
Route::get('/media/show/{id}',[MediaController::class,'show'])->name('media_show');
// Route::post('/add_sponsor_form',[SponsorFormController::class,'create'])->name('create_sponsor_form');


// about routes
Route::get('/about',[AboutController::class,'index'])->name('about');
Route::get('/about/edit/{id}',[AboutController::class,'edit'])->name('about_edit');
Route::post('/about/add',[AboutController::class,'store'])->name('about_add');
Route::get('/about/show',[AboutController::class,'show'])->name('about_show');
Route::post('/about/update/{id}',[AboutController::class,'update'])->name('about_update');


// contact routes
Route::get('/contact',[ContactController::class,'index'])->name('contact');
Route::get('/contact/edit/{id}',[ContactController::class,'edit'])->name('contact_edit');
Route::post('/contact/add',[ContactController::class,'store'])->name('contact_add');
Route::get('/contact/show',[ContactController::class,'show'])->name('contact_show');
Route::post('/contact/update/{id}',[ContactController::class,'update'])->name('contact_update');


// photos routes
Route::get('/photos',[PhotosController::class,'index'])->name('photos');
Route::post('/photos/edit2/{id}',[PhotosController::class,'update'])->name('photos_update');
Route::post('/photos/add',[PhotosController::class,'store'])->name('photos_add');
Route::get('/photos/show',[PhotosController::class,'show_2'])->name('photos_show');
Route::get('/photos/{year}',[PhotosController::class,'show'])->name('photos.year');
Route::post('/photos/delete_images/{id}',[PhotosController::class,'delete_images_photos'])->name('delete_images_gallery');



// videos routes
Route::get('/videos',[VideosController::class,'index'])->name('videos');
Route::get('/videos/{year}',[VideosController::class,'show_2'])->name('videos.year');
Route::get('/videos/edit/{id}',[VideosController::class,'edit'])->name('videos_edit');
Route::post('/videos/add',[VideosController::class,'store'])->name('videos_add');
Route::get('/videos/add/show',[VideosController::class,'show_3'])->name('videos_show3');
Route::post('/videos/update/{id}',[VideosController::class,'update'])->name('videos_update');
Route::get('/videos/delete/{id}',[VideosController::class,'destroy'])->name('videos_delete');



// events routes
Route::get('/events/{date}',[EventController::class,'index'])->name('events');
Route::get('/events/edit/{id}',[EventController::class,'edit'])->name('events_edit');
Route::post('/events/add',[EventController::class,'store'])->name('events_add');
Route::get('/events/show/create',[EventController::class,'show'])->name('events_show');
Route::post('/events/update/{id}',[EventController::class,'update'])->name('events_update');
Route::get('/events/delete/{id}',[EventController::class,'destroy'])->name('events_delete');



// moderator routes
Route::get('/moderators/{id}',[ModeratorController::class,'index'])->name('moderators');
Route::get('/moderators/edit/{id}',[ModeratorController::class,'edit'])->name('moderators_edit');
Route::post('/moderators/add/create',[ModeratorController::class,'store'])->name('moderators_add');
Route::get('/moderators/show/create',[ModeratorController::class,'show'])->name('moderators_show');
Route::post('/moderators/update/{id}',[ModeratorController::class,'update'])->name('moderators_update');
Route::get('/moderators/delete/{id}',[ModeratorController::class,'destroy'])->name('moderators_delete');



// projects routes
Route::get('/projects',[ProjectController::class,'index'])->name('projects');
Route::get('/projects/edit/{id}',[ProjectController::class,'edit'])->name('projects_edit');
Route::post('/projects/add',[ProjectController::class,'store'])->name('projects_add');
Route::get('/projects/show',[ProjectController::class,'show'])->name('projects_show');
Route::post('/projects/update/{id}',[ProjectController::class,'update'])->name('projects_update');
Route::get('/projects/delete/{id}',[ProjectController::class,'destroy'])->name('projects_delete');



// date routes
Route::get('/dates',[DatesController::class,'index'])->name('dates');
Route::get('/dates/edit/{id}',[DatesController::class,'edit'])->name('dates_edit');
Route::post('/dates/update/{id}',[DatesController::class,'update'])->name('dates_update');

// subscribers
Route::get('/subscribers',[SubscribeController::class,'index'])->name('subscribers');

 // meta tags routes
 Route::get('/meta',[MetaController::class,'index'])->name('meta');
 Route::get('/meta/edit/{id}',[MetaController::class,'edit'])->name('meta_edit');
 Route::post('/meta/add',[MetaController::class,'store'])->name('meta_add');
 Route::get('/meta/show',[MetaController::class,'show'])->name('meta_show');
 Route::post('/meta/update/{id}',[MetaController::class,'update'])->name('meta_update');


 Route::get('/subscriber_excel',[SubscribeController::class,'excel'])->name('subscriber_excel');
 Route::get('/register_excel',[RegistrationController::class,'excel'])->name('register_excel');
 Route::get('/sponsor_excel',[SponsorFormController::class,'excel'])->name('sponsor_excel');



 // tickets routes
 Route::get('/ticket',[TicketsController::class,'index'])->name('ticket');
 Route::get('/ticket/edit/{id}',[TicketsController::class,'edit'])->name('ticket_edit');
 Route::post('/ticket/add',[TicketsController::class,'store'])->name('ticket_add');
 Route::get('/ticket/show',[TicketsController::class,'show'])->name('ticket_show');
 Route::post('/ticket/update/{id}',[TicketsController::class,'update'])->name('ticket_update');
 Route::get('/ticket/delete/{id}',[TicketsController::class,'destroy'])->name('ticket_delete');


});
