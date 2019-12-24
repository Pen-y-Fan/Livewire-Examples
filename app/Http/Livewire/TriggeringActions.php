<?php

namespace App\Http\Livewire;

use Livewire\Component;

/**
 * Class TriggeringActions
 *
 * @package App\Http\Livewire
 */
class TriggeringActions extends Component
{
    /**
     * @var array
     */
    public $todos = [];
    /**
     * @var string
     */
    public $title = "";

    /**
     * Adds a title
     *
     * @return void
     */
    public function addTodo(): void
    {
        if (!$this->title) {
            return;
        }
        $this->todos[] = $this->title;
        $this->title = "";
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function render()
    {
        return view('livewire.triggering-actions');
    }
}
