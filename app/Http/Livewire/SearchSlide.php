<?php

namespace App\Http\Livewire;

use App\Models\web\SlideMain;
use Livewire\Component;
use Livewire\WithPagination;

class SearchSlide extends Component
{
    use WithPagination;
    public $search;
    
    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.search-slide',[
            'sliders' => SlideMain::where('name','LIKE', $search)->paginate(10)
        ]);
        return view('livewire.search-slide');
    }
}
