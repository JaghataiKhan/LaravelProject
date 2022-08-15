<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\AboutSection;

class About extends Component
{

    public function __construct()
    {

    }

    public function render()
    {
        return view('components.pages.about', [
            'about' => AboutSection::first()
        ]);
    }
}
