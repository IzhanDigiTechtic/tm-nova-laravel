<?php

namespace App\Http\Controllers;
class FrontendController extends Controller

{
    // ##################### Website Pages ######################
  
    public function home()
    {
        return view(
            'frontend.pages.home',
            [
                'title' => 'Trademark Registration Services in USA | Trademark Nova',
                'description' => 'Trademark registration services in USA. FIle trademark with USPTO . Get Your Trademark Registration With USPTO in Just $49',
                'keywords' => 'Trademark Registration'
            ]
        );
    }
    public function about()
    {
        return view(
            'frontend.pages.about.index',
            [
                'title' => 'About Us | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
    public function ourcorecompetencyandvalues()
    {
        return view(
            'frontend.pages.our-core-competency-and-values.index',
            [
                'title' => 'Our Core Competency & Values | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
    public function successrate()
    {
        return view(
            'frontend.pages.success-rate.index',
            [
                'title' => 'Success Stories | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
    public function reviews()
    {
        return view(
            'frontend.pages.reviews.index',
            [
                'title' => 'Client Testimonials | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
    public function contact()
    {
        return view(
            'frontend.pages.contact.index',
            [
                'title' => 'Contact | Trademark Nova',
                'description' => '',
                'keywords' => ''
            ]
        );
    }
}