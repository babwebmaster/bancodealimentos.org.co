<?php

namespace App\View\Components\web;

use Illuminate\View\Component;

class Cifras extends Component
{
    public $cifras;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($cifras)
    {
        $this->cifras = $cifras;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.cifras');
    }
}
