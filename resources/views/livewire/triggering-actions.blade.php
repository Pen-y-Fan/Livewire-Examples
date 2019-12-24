<div>

    <form wire:submit.prevent="addTodo">
        <input wire:model="title" wire:keydown.enter="addTodo" required>
        <button>Add Todo</button>
    </form>

    ToDo List:
    <ul>
        @foreach ($this->todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
    </ul>

</div>
