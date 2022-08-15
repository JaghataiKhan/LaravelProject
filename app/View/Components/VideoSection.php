<?php

namespace App\View\Components;

use Illuminate\View\Component;

class VideoSection extends Component
{

    public function __construct()
    {
    }

    public function render()
    {
        return view('components.pages.video-section', [
            'videos' => \App\Models\VideoSection::all(),
        ]);
    }
}
