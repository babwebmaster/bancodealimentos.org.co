<?php

namespace App\Http\Livewire;

use App\Models\web\Reports;
use Livewire\Component;
use Livewire\WithPagination;

class SearchReports extends Component
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
        return view('livewire.search-reports',[
            'reports' => Reports::where('name','LIKE', $search)->paginate(6)
        ]);
    }
}
