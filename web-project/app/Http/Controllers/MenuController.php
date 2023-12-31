<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Settings;
use App\Models\About;
use App\Models\References;
use App\Models\Services;
use App\Models\Slider;
use League\CommonMark\Reference\Reference;

class MenuController extends Controller
{
    public function home(){
        $sliders = Slider::query()->get();
        $services = Services::query()->get();
        $about = About::query()->first();
        $references = References::query()->get();
       return view('home' , compact('sliders','services','about','references'));
    }

    public function about(){
        $references = References::query()->get();
        $about = About::query()->first();
        return view('about', compact('about','references'));
    }

    public function services(){
        $services = Services::query()->get();
        $references = References::query()->get();
        return view('services', compact('services','references'));
    }

    public function contact(){
        $references = References::query()->get();
        $settings = Settings::query()->first();
        return view('contact', compact('settings','references'));
    }
}
