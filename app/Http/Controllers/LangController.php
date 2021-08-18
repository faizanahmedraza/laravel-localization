<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LangController extends Controller
{
    public function index($locale)
    {
        abort_if(! in_array($locale, ['en', 'es', 'ar', 'chs', 'ur']),404);
        App::setLocale($locale);
        return view('home');
    }

    public function changeLang()
    {
        $lang = request()->lang;
        abort_if(! in_array($lang, ['en', 'es', 'ar', 'chs', 'ur']),404);
        App::setLocale($lang);
        return redirect($lang);
    }
}
