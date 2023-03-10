<?php

namespace App\View\Components\web;

use Illuminate\View\Component;

class Reports extends Component
{
    public $reports;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($reports)
    {
        $this->reports = $reports;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.web.reports');
    }
}
