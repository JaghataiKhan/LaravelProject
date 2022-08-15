<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\Contacts;

class ContactSection extends Component
{

    public function __construct()
    {
    }

    public function render()
    {
        return view('components.pages.contact-section', ['contact' => Contacts::first()]);
    }
}
