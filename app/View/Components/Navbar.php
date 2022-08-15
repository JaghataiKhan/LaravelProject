<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\NavbarItem;

class Navbar extends Component
{

    public function __construct()
    {

    }

    public function render()
    {
        return view('components.elements.navbar', [
            'navbarItems' => NavbarItem::all()
        ]);
    }
}
