<?php

namespace App\View\Components\web;

use Illuminate\View\Component;

class Directors extends Component
{
    public $directors;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($directors)
    {
        $this->directors = $directors;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.directors');
    }
}
