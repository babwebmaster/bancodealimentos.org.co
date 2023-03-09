<?php

namespace App\View\Components\web;

use Illuminate\View\Component;

class Reconocimientos extends Component
{
    public $reconocimientos;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($reconocimientos)
    {
        $this->reconocimientos = $reconocimientos;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.reconocimientos');
    }
}
