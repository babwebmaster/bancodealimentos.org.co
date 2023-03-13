<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class SearchUser extends Component
{
    use WithPagination;
    public $search;
    protected $queryString = ['search'];
    public $showingModal = false;
    public $listeners = [
        'hideMe' => 'hideModal'
    ];
    public $user = null;

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

    public function showModal($id){
        $this->showingModal = true;
        $this->user = $id;
    }

    public function hideModal(){
        $this->showingModal = false;
        $this->user = null;
    }

    public function delete(){
        $user = User::find($this->user);
        $delete = $user->delete();
        if($delete){
            Alert::alert('Exito', 'Usuario  Eliminado Correctamente!', 'success');
        }else{
            Alert::alert('Error', 'No se puedo eliminar, por favor intentelo de nuevo.', 'error');
        }
        return to_route("user.index");
    }
}
