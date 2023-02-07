<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use \App\Models\Category;

class CategoryList extends Component
{
    protected $listeners = ['render', 'deleteCat' => 'deleteCat', 'opencatedit' => 'opencatedit'];
    public $defaultCategories;
    public $userCategories;
    public function mount()
    {
        $this->loadCategories();
    }
    public function loadCategories()
    {
        $this->defaultCategories = Category::whereNull('user_id')->get();
        $this->userCategories = Category::where('user_id', Auth::id())->get();
    }
    public function render()
    {
        $this->loadCategories();
        return view('livewire.category-list', ['defaultCategories' => $this->defaultCategories, 'userCategories' => $this->userCategories]);
    }
    public function deleteCat($id)
    {
        $category = Category::find($id);
        if ($category->user_id === null) {
            $this->emit('errorDelCat', 'No es posible eliminar la categoría <b>predefinida</b>');
        } elseif ($category->tasks()->count() > 0) {
            $this->emit('errorDelCat', 'Esta categoría no se puede eliminar debido a que tiene tareas asignadas. Por favor, reasigne o elimine estas tareas antes de continuar.');
        } else {
            Category::destroy($id);
            $this->emitTo('categories-aside', 'render');
            $this->emitTo('counted-user-tasks', 'render');
            $this->emitTo('category-list', 'render');
            $this->emit('render');
        }
    }
    public function opencatedit($id)
    {
        $category = Category::find($id);
        if ($category->user_id === null) {
            $this->emit('errorDelCat', 'No es posible editar una categoría <b>predefinida</b>');
        } else {
            $this->emit('errorDelCat', 'Lo sentimos, la edición de categorías está temporalmente no disponible, pero estamos trabajando en brindarle esta función lo antes posible. Mientras tanto, le sugerimos eliminar y crear de nuevo la categoría que desea modificar. <br> <b>¡Gracias por su comprensión y paciencia!</b>');
        }
    }
}