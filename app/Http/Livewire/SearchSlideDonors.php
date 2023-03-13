<?php

namespace App\Http\Livewire;

use App\Models\web\SlideDonors;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class SearchSlideDonors extends Component
{
    use WithPagination;
    public $search;
    protected $queryString = ['search'];
    public $showingModal = false;
    public $listeners = [
        'hideMe' => 'hideModal'
    ];
    public $slide = null;
    
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $search = '%'.$this->search.'%';
        $slideDonor = SlideDonors::where('name','LIKE', $search)->orWhere('image','LIKE', $search)->paginate(5);
        return view('livewire.search-slide-donors', compact('slideDonor'));
    }

    public function showModal($id){
        $this->showingModal = true;
        $this->slide = $id;
    }

    public function hideModal(){
        $this->showingModal = false;
        $this->slide = null;
    }

    public function delete(){
        $slidedonor = SlideDonors::find($this->slide);
        $delete = $slidedonor->delete();
        if($delete){
            Alert::alert('Exito', 'Slide Donante  Eliminado Correctamente!', 'success');
        }else{
            Alert::alert('Error', 'No se puedo eliminar, por favor intentelo de nuevo.', 'error');
        }
        return to_route("slide-donors.index");
    }
}
