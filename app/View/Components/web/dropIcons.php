<?php

namespace App\View\Components\web;

use Illuminate\View\Component;

class DropIcons extends Component
{
    public $reconocimiento;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($reconocimiento)
    {
        $this->reconocimiento = $reconocimiento;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.drop-icons');
    }
}
