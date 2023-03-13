<?php

namespace App\Http\Livewire;

use App\Models\web\Reports;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class SearchReports extends Component
{   
    use WithPagination;
    public $search;
    protected $queryString = ['search'];
    public $showingModal = false;
    public $listeners = [
        'hideMe' => 'hideModal'
    ];
    public $report = null;

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
    
    public function showModal($id){
        $this->showingModal = true;
        $this->report = $id;
    }

    public function hideModal(){
        $this->showingModal = false;
        $this->report = null;
    }

    public function delete(){
        $report = Reports::find($this->report);
        $delete = $report->delete();
        if($delete){
            Alert::alert('Exito', 'Informe  Eliminado Correctamente!', 'success');
        }else{
            Alert::alert('Error', 'No se puedo eliminar, por favor intentelo de nuevo.', 'error');
        }
        return to_route("reports.index");
    }
}
