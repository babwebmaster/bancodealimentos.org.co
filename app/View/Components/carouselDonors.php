<?php

namespace App\View\Components;

use Illuminate\View\Component;

class carouselDonors extends Component
{
    public $slideDonor;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($slideDonor)
    {
        $this->slideDonor = $slideDonor;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.carousel-donors');
    }
}
