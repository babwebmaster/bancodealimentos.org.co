<?php

namespace App\Http\Livewire;

use App\Models\web\Directors;
use Livewire\Component;
use Livewire\WithPagination;

class SearchDirectors extends Component
{
    use WithPagination;
    public $search = '';
    protected $queryString = ['search'];

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $search = '%'.$this->search.'%';
        $querySearch = Directors::where('title','LIKE', $search)
            ->orWhere('name','LIKE', $search)
            ->orWhere('description','LIKE', $search);
        return view('livewire.search-directors',[
            'directors' => $querySearch->paginate(5)
        ]);
    }
}
