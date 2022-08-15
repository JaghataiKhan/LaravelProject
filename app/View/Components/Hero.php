<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\HeroSection;

class Hero extends Component
{

    public function __construct()
    {

    }

    public function render()
    {
        return view('components.pages.hero', [
            'hero' => HeroSection::first()
        ]);
    }
}
