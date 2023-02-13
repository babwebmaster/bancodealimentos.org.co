<?php

namespace App\Http\Livewire;

use App\Models\web\Reconocimientos;
use Livewire\Component;
use Livewire\WithPagination;

class SearchReconocimientos extends Component
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
        return view('livewire.search-reconocimientos',[
            'reconocimientos' => Reconocimientos::where('title','LIKE', $search)->orWhere('content','LIKE', $search)->paginate(5)
        ]);
    }
}
