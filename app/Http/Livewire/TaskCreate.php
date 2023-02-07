<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class TaskCreate extends Component
{
    public $tasktitle;
    public $selectedCategory;

    protected $rules = [
        'tasktitle' => 'required|min:10',
    ];

    public function saveTask()
    {
        $this->validate();
        Task::create([
            'user_id' => Auth::id(),
            'title' => $this->tasktitle,
            'category_id' => $this->selectedCategory,
            'status' => 'in progress',
        ]);
        $this->reset(['tasktitle', 'selectedCategory']);
        $this->emitTo('categories-aside', 'render');
        $this->emitTo('counted-user-tasks', 'render');
        $this->emit('render');
    }

    public function render()
    {
        return view('livewire.task-create');
    }
}