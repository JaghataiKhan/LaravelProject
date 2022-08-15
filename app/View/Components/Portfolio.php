<?php

namespace App\View\Components;

use Illuminate\View\Component;
use App\Models\ProductCategory;
class Portfolio extends Component
{

    public function __construct()
    {

    }

    public function render()
    {
        return view('components.pages.portfolio', [
            'categories' => ProductCategory::with('products')->get()
        ]);
    }
}
