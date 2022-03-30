<?php

namespace App\Http\Controllers;

class AboutUsController
{
    public function __invoke(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('about-us');
    }
}
