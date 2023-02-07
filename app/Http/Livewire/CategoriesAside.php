<?php

namespace App\Http\Livewire;

use App\Models\Icon;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use App\Models\Category;
use App\Models\Task;

class CategoriesAside extends Component
{
    protected $listeners = ['render'];
    public $totalTasks;
    public $categories;
    public $selectedCategoryId = null;
    public $opencatcreate = false;
    public $name, $catId, $color;

    protected $rules = [
        'name' => 'required|max:10',
        'catId' => 'required',
        'color' => 'required',
    ];

    public function save()
    {
        $this->validate();
        $user_id = Auth::id();
        Category::create([
            'user_id' => $user_id,
            'name' => $this->name,
            'icon_id' => $this->catId,
            'color' => $this->color,
        ]);

        $this->emit('resetinputselectoptionme');
        $lastCategoryTitle = Category::latest()->first()->name;
        $this->reset(['opencatcreate', 'name', 'catId', 'color']);
        $this->emit('render');
        $this->emit('alertsuccescat', $lastCategoryTitle);
    }

    public function mount()
    {
        $this->loadCategories();
        $this->loadTasks();
    }
    public function changeOpencatcreate()
    {
        $this->opencatcreate = !$this->opencatcreate;
    }
    private function loadCategories()
    {
        $this->categories = Category::where('user_id', auth()->id())->orWhereNull('user_id')->withCount('tasks')->get();
    }
    private function loadTasks()
    {
        $this->totalTasks = Task::where('user_id', auth()->id())->count();
    }
    public function render()
    {
        $this->loadCategories();
        $this->loadTasks();
        $icons = Icon::all();
        return view('livewire.categories-aside', compact('icons'));
    }

    public function filterTasks($categoryId)
    {
        $this->emitTo('showtask', 'categorySelected', $categoryId);
        $this->selectedCategoryId = $categoryId;
    }
}