<div xmlns:wire="http://www.w3.org/1999/xhtml">
    <label>
        Enter Name:
        <input type="text" wire:model="name" placeholder="type name">
    </label>
    <br>
    Hi! My name is: {{ $this->name }}

    <br><br>

    <label>Post about yourself:
        <textarea wire:model.lazy="post"></textarea>
    </label>
    <br><br>
    I am posting about:<br>
    {{ $this->post }}

</div>
