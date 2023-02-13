<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class SearchUser extends Component
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
        return view('livewire.search-user',[
            'users' => User::where('name','LIKE', $search)->orWhere('email','LIKE', $search)->paginate(10)
        ]);
    }
}
