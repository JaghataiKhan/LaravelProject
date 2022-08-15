<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Owners;

class Owner extends Component
{

    public function __construct()
    {

    }

    public function render()
    {
        return view('components.pages.team', [
            'owners' => Owners::all()
        ]);
    }
}
