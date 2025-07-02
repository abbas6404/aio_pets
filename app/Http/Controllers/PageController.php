<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the home page.
     */
    public function home()
    {
        return view('pages.home');
    }

    /**
     * Display the about page.
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the contact page.
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Display the gallery page.
     */
    public function gallery()
    {
        return view('pages.gallery');
    }

    /**
     * Display the adoption page.
     */
    public function adoption()
    {
        return view('pages.adoption');
    }

    /**
     * Display the services page.
     */
    public function services()
    {
        return view('pages.our-services');
    }

    /**
     * Display the pet hotel service page.
     */
    public function petHotelService()
    {
        return view('pages.services-pet-hotel');
    }
} 