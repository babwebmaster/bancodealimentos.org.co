<?php

namespace App\Http\Livewire;

use App\Models\web\SlideDonors;
use Livewire\Component;
use Livewire\WithPagination;

class SearchSlideDonors extends Component
{
    use WithPagination;
    public $search;
    protected $queryString = ['search'];
    
    public function render()
    {
        $search = '%'.$this->search.'%';
        $slideDonor = SlideDonors::where('name','LIKE', $search)->orWhere('image','LIKE', $search)->paginate(10);
        return view('livewire.search-slide-donors', compact('slideDonor'));
    }
}
