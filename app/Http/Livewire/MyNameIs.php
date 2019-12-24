<?php

namespace App\Http\Livewire;

use Livewire\Component;

class MyNameIs extends Component
{
    public $name = "Harry";
    public $post = "";
    public $todos = [];
    public $title = "";

    public function render()
    {
        return view('livewire.my-name-is');
    }

    public function addTodo()
    {
        $this->todos[] = $this->title;
        $this->title = "";
    }
}
