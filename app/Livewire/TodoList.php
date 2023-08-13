<?php

namespace App\Livewire;

use App\Models\Todo;
use Livewire\Component;

class TodoList extends Component
{



    public function render()
    {
        return view('livewire.todo-list');
    }
}
