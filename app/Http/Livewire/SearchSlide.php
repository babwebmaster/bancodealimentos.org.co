<?php

namespace App\Http\Livewire;

use App\Models\web\SlideMain;
use Livewire\Component;
use Livewire\WithPagination;

class SearchSlide extends Component
{
    use WithPagination;
    public $search;
    protected $queryString = ['search'];
    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $search = '%'.$this->search.'%';
        return view('livewire.search-slide',[
            'sliders' => SlideMain::where('name','LIKE', $search)->orWhere('content_desktop','LIKE', $search)->orWhere('content_mobile','LIKE', $search)->paginate(10)
        ]);
    }
}
