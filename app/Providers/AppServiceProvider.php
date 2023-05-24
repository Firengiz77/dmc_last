<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Language;
use App\Models\Photos;
use App\Models\Videos;
use App\Models\Contact;
use App\Models\About;
use App\Models\Meta;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $all_languages = Language::get();
        $photos2 = Photos::get();
        $videos2 = Videos::select('year')->distinct()->get();
        $contact = Contact::first();
        $about= About::first();
        $meta = Meta::first();
        view()->share([
            'all_languages' => $all_languages,
            'photos2' => $photos2,
            'videos2' => $videos2,
            'contact' => $contact,
            'about' => $about,
            'meta' => $meta
        ]);

    }
}
