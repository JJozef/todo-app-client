<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Task;
use Illuminate\Support\Facades\Auth;

class Showtask extends Component
{
    protected $listeners = ['render', 'deleteTask' => 'deleteTask', 'updateTask' => 'updateTask', 'categorySelected' => 'filterByCategory'];

    protected $tasks;
    public $titleEdit;
    public $category_id;
    public function render()
    {
        $query = Task::where('user_id', Auth::id());

        if ($this->category_id) {
            $query->where('category_id', $this->category_id);
        }

        $tasks = $query->orderBy('id', 'DESC')
            ->paginate(10);

        return view('livewire.show-task', ['tasks' => $tasks]);
    }

    public function updateTask($taskId, $taskTitleEdit)
    {
        if (!empty($taskTitleEdit) && strlen($taskTitleEdit) >= 10) {
            $task = Task::find($taskId);
            $task->title = $taskTitleEdit;
            $task->update();
        } else {
            $this->emit('errorUpdateTask', 'Por favor ingrese un texto de al menos 10 caracteres para actualizar la tarea.');
        }
    }

    public function deleteTask($id)
    {
        Task::destroy($id);
        $this->emitTo('categories-aside', 'render');
        $this->emitTo('counted-user-tasks', 'render');
        $this->emitTo('taskcreate', 'render');
        $this->emit('render');
    }

    public function filterByCategory($categoryId)
    {
        $this->category_id = $categoryId;
        $this->emit('render');
    }
}