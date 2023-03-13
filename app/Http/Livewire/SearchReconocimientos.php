<?php

namespace App\Http\Livewire;

use App\Models\web\Reconocimientos;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class SearchReconocimientos extends Component
{
    use WithPagination;
    public $search;
    protected $queryString = ['search'];
    public $showingModal = false;
    public $listeners = [
        'hideMe' => 'hideModal'
    ];
    public $reconocimiento = null;

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
        
    public function showModal($id){
        $this->showingModal = true;
        $this->reconocimiento = $id;
    }

    public function hideModal(){
        $this->showingModal = false;
        $this->reconocimiento = null;
    }

    public function delete(){
        $reconocimiento = Reconocimientos::find($this->reconocimiento);
        $delete = $reconocimiento->delete();
        if($delete){
            Alert::alert('Exito', 'Reconocimiento  Eliminado Correctamente!', 'success');
        }else{
            Alert::alert('Error', 'No se puedo eliminar, por favor intentelo de nuevo.', 'error');
        }
        return to_route("reconocimientos.index");
    }
}
