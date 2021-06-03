<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use App\Models\Winner;
use Illuminate\Http\Request;

class IndexPage extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function profile()
    {
        return view('pages.profile');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function contact()
    {
        return view('pages.about');
    }

    public function education()
    {
        return view('pages.education');
    }

    public function experience()
    {
        return view('pages.experience');
    }

    public function insert()
    {
        return view('pages.insert');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function services()
    {
        return view('pages.services');
    }

    public function skills()
    {
        return view('pages.skills');
    }

    public function testimonials()
    {
        return view('pages.testimonials');
    }

    public function authenticateUser ()
    {
        if (auth())
            return redirect()->route('profile');
        else
            return view('pages.login');
    }

    public function registerUser ()
    {
        return view('pages.register');
    }

}
