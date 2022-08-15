<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Contacts;

class Footer extends Component
{

    public function __construct()
    {

    }

    public function render()
    {
        return view('components.elements.footer', [
            'footer' => Contacts::first()
        ]);
    }
}
