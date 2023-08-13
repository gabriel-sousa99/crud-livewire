<?php

namespace App\Livewire;

use App\Models\Todo;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TodoForm extends Component
{
    public $title;
    public $description;


    protected $rules = [
        'title' => ['required', 'string'],
        'description' => ['sometimes', 'nullable', 'string']
    ];

    protected $messages = [
        'title.required' => 'O campo título é obrigatório',
        'title.string' => 'O campo título deve ser uma string',
        'description.string' => 'O campo descrição deve ser uma string',
    ];

    public function addTodo()
    {
        $this->validate();

        DB::transaction(function () {
            $todo = new Todo();
            $todo->title = $this->title;
            $todo->description = $this->description;
            $todo->save();

            $this->title = "";
            $this->description = "";

            session()->flash('message', 'Tarefa adicionada com sucesso!');
        });
    }
    public function render()

    {
        return view('livewire.todo-form');
    }
}
