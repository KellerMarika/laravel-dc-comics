<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function home()
    {
        $navLinks = config("DBheaderNav");
        $topBunner = config("DBtopBunner");
            $footerLinks = config("DBfooter");
        $bottomBunnerLinks = config("DBbottomBunnerSocial");


        $comics = config("DBcomics");
        /*      
        $comics = Comic::all(); */
        return view('comics.home', compact('navLinks', 'topBunner', 'footerLinks', 'bottomBunnerLinks','comics'));
    }

}