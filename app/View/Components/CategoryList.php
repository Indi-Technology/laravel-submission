<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CategoryList extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $ctg;
    public function __construct($ctg)
    {
        $this->ctg = $ctg;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.category-list');
    }
}
