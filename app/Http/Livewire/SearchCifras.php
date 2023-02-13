<?php

namespace App\Http\Livewire;

use App\Models\web\CategoryCifras;
use App\Models\web\Cifras;
use App\Models\web\CifrasCategoryCifra;
use Livewire\Component;
use Livewire\WithPagination;
use RealRashid\SweetAlert\Facades\Alert;

class SearchCifras extends Component
{
    use WithPagination;
    public $search;
    protected $queryString = ['search'];
    public $openModal = false;
    public $nombre;

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
        $categoryCifras = CategoryCifras::all();
        $search = '%'.$this->search.'%';
        $querySearch = Cifras::where('name','LIKE', $search)
            ->orWhere('value','LIKE', $search);
        return view('livewire.search-cifras',[
            'cifras' => $querySearch->paginate(5),
            'categoryCifras' => $categoryCifras,
        ]);
    }

    public function create()
    {
        $this->validate([
            'nombre' => 'required|min:3|max:50|string',
        ]);
        CategoryCifras::create([
            'id' => null,
            'nombre' => $this->nombre,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Alert::toast('Categoria Cifra Creada Correctamente!', 'success');
        return to_route('cifras.index');
    }
    
    public function destroy(CategoryCifras $categoryCifras)
    {
        $categoryCifras->cifras()->detach();
        $categoryCifras->delete();
        Alert::toast('Categoria Cifra Eliminada Correctamente!', 'success');
        return to_route('cifras.index');
    }
}
