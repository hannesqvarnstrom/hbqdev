<?php

namespace App\View\Components;

use Illuminate\View\Component;

class CategoryItem extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $name;
    public $id;
    public function __construct($category)
    {
        //
        $this->name = $category->name;
        $this->id = $category->id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.category-item');
    }
}
