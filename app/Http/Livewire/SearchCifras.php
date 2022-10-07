<?php

namespace App\Http\Livewire;

use App\Models\web\Cifras;
use Livewire\Component;
use Livewire\WithPagination;

class SearchCifras extends Component
{
    use WithPagination;
    public $search;
    protected $queryString = ['search'];

    public function render()
    {
        $search = '%'.$this->search.'%';
        $querySearch = Cifras::where('name','LIKE', $search)->orWhere('value','LIKE', $search);
        return view('livewire.search-cifras',[
            'cifras' => $querySearch->paginate(5)
        ]);
    }
}
