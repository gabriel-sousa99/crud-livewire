<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class TodoList extends Component
{

    use WithPagination;
    public $search;

    #[On('todoAdded')]
    public function todoAdded()
    {
        $this->getTodos();
    }




    public function getTodos()
    {
        return Todo::when($this->search, function ($query) {
            $query->where('title', 'like', '%' . $this->search . '%');
        })->latest()->paginate(5);
    }

    public function delete($id)
    {
        $todo = Todo::find($id);
        $todo->delete();
    }


    public function toggle($id)
    {
        $todo = Todo::find($id);
        $todo->completed = !$todo->completed;
        $todo->save();

        session()->flash("completed", ["id" => $todo->id, "message" => $todo->completed ? 'Tarefa Completa' : 'Tarefa Pendente']);
    }

    public function render()
    {
        return view('livewire.todo-list', [
            'todos' => $this->getTodos()
        ]);
    }
}
