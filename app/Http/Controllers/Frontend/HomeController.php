<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Cotact;
use App\Models\Featur_cards;
use App\Models\Logo;
use App\Models\Section_title;
use App\Models\Slider;
use App\Models\Testimonial;
use App\Models\Video;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data['countabout'] = About::count();
        $data['about'] = About::first();
        $data['video'] = Video::all();
        $data['testimonials'] = Testimonial::all();
        $data['logo'] = Logo::first();
        $data['title'] = Section_title::all();
        $data['sliders'] = Slider::all();
        $data['f_cards'] = Featur_cards::where('subtitle','feature')->get();
        $data['s_cards'] = Featur_cards::where('subtitle','service')->get();
        $data['s5_cards'] = Featur_cards::where('subtitle','service')->take(5)->get();
        $data['c_cards'] = Featur_cards::where('subtitle','course')->get();
        $data['p_cards'] = Featur_cards::where('subtitle','portfolio')->get();
        $data['contact'] = Cotact::first();
        //dd($data);
        return view('Frontend.layouts.welcome', $data);
    }
    public function about()
    {
        $data['countabout'] = About::count();
        $data['logo'] = Logo::first();
        $data['about'] = About::first();
        $data['contact'] = Cotact::first();
        $data['s5_cards'] = Featur_cards::where('subtitle','service')->take(5)->get();

        return view('Frontend.single_pages.about_us', $data);
    }
    public function feature($title)
    {
        $data['logo'] = Logo::first();
        $data['all_data'] = Featur_cards::where('id', $title)->get();
        $data['contact'] = Cotact::first();
        $data['s5_cards'] = Featur_cards::where('subtitle','service')->take(5)->get();
       // dd($data);
        return view('Frontend.single_pages.feature', $data);
    }
    public function service($title)
    {
        $data['logo'] = Logo::first();
        $data['s_cards'] = Featur_cards::where('subtitle','service')->get();
        $data['all_data'] = Featur_cards::where('id', $title)->get();
        $data['contact'] = Cotact::first();
        $data['s5_cards'] = Featur_cards::where('subtitle','service')->take(5)->get();
       // dd($data);
        return view('Frontend.single_pages.feature', $data);
    }
    public function portfolio($title)
    {
        $data['logo'] = Logo::first();
        $data['p_cards'] = Featur_cards::where('subtitle','portfolio')->get();
        $data['all_data'] = Featur_cards::where('id', $title)->get();
        $data['contact'] = Cotact::first();
        $data['s5_cards'] = Featur_cards::where('subtitle','service')->take(5)->get();
       // dd($data);
        return view('Frontend.single_pages.feature', $data);
    }

    public function course($title)
    {
        $data['logo'] = Logo::first();
        $data['c_cards'] = Featur_cards::where('subtitle','course')->get();
        $data['s_cards'] = Featur_cards::where('subtitle','service')->get();
        $data['all_data'] = Featur_cards::where('id', $title)->get();
        $data['contact'] = Cotact::first();
        $data['s5_cards'] = Featur_cards::where('subtitle','service')->take(5)->get();
       // dd($data);
        return view('Frontend.single_pages.feature', $data);
    }
}
