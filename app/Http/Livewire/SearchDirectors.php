<?php

namespace App\Http\Livewire;

use App\Models\web\Directors;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class SearchDirectors extends Component
{
    use WithPagination;
    public $search = '';
    protected $queryString = ['search'];    
    public $showingModal = false;
    public $listeners = [
        'hideMe' => 'hideModal'
    ];
    public $director = null;


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
    
    public function showModal($id){
        $this->showingModal = true;
        $this->director = $id;
    }

    public function hideModal(){
        $this->showingModal = false;
        $this->director = null;
    }

    public function delete(){
        $director = Directors::find($this->director);
        $delete = $director->delete();
        if($delete){
            Alert::alert('Exito', 'Directivo  Eliminado Correctamente!', 'success');
        }else{
            Alert::alert('Error', 'No se puedo eliminar, por favor intentelo de nuevo.', 'error');
        }
        return to_route("directors.index");
    }
}
