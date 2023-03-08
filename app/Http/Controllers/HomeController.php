<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{
    //
    public function index()
    {
        $last_opened = session('last_opened') ?? Cookie::get('last_opened');
        $current_time = now();
        if (!$last_opened || $last_opened->diffInMinutes($current_time) >= 30) {
            session(['last_opened' => $current_time]);
            Cookie::queue(Cookie::make('last_opened', $current_time, 30));
            return view('Pages.Home')->with('open_model', true);
        }
        return view('Pages.Home')->with('open_model', false);
    }

    public function switch($lang)
    {
        session(['locale' => $lang]);
        // dd();
        return back();
    }
    public function reactPages()
    {
        return view('ReactHome');
    }
}
