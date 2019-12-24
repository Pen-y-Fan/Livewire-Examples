<div>
    <form wire:submit.prevent="submit">
        <input type="text" id="name" placeholder="name" wire:model="name">
        @error('name') <span class="error">{{ $message }}</span> @enderror
        <br>
        <input type="text" id="email" placeholder="email" wire:model="email">
        @error('email') <span class="error">{{ $message }}</span> @enderror
        <br>

        <button type="submit">Save Contact</button>
    </form>
    @if ($this->successMessage)
        <div>
            {{ $this->successMessage }}
        </div>
    @endif
</div>
