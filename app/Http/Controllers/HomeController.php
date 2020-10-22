<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function changeLanguage($language)
    {
        Session::put('language', $language);

        return redirect()->back();
    }

    public function landingPage()
    {
<<<<<<< HEAD
        return view('landing-page.landing-page');
=======
        return view('welcome');
>>>>>>> 4a80795258c4edc79079d1358e30ed969cba7b34
    }
}
