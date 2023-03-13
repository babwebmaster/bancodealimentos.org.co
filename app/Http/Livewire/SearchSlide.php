<?php

namespace App\Http\Livewire;

use App\Models\web\SlideMain;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class SearchSlide extends Component
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
        return view('livewire.search-slide',[
            'sliders' => SlideMain::where('name','LIKE', $search)->orWhere('content_desktop','LIKE', $search)->orWhere('content_mobile','LIKE', $search)->paginate(10)
        ]);
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
        $slide = SlideMain::find($this->slide);
        $delete = $slide->delete();
        if($delete){
            Alert::alert('Exito', 'Slide  Eliminado Correctamente!', 'success');
        }else{
            Alert::alert('Error', 'No se puedo eliminar, por favor intentelo de nuevo.', 'error');
        }
        return to_route("slide.index");
    }
}
