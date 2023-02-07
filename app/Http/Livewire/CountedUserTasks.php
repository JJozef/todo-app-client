<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;

class CountedUserTasks extends Component
{
    protected $listeners = ['render'];
    public $totalTasks;

    public function mount()
    {
        $this->contarTareas();
    }

    public function render()
    {
        $this->contarTareas();
        return view('livewire.counted-user-tasks');
    }

    private function contarTareas()
    {
        $this->totalTasks = Task::where('user_id', auth()->id())->count();
    }
}