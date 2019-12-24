<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Log;
use Livewire\Component;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $successMessage = "";

    public function updated($field)
    {
        $this->validateOnly($field, [
            'name' => 'required|min:6',
            'email' => 'required|email',
        ]);
    }

    public function submit()
    {
        $this->successMessage = "";
        $this->validate([
            'name'  => 'required|min:6',
            'email' => 'required|email',
        ]);

        // Execution doesn't reach here if validation fails.

        // For this Demo the successMessage is logged (see storage/logs/laravel.log)
        $this->successMessage = 'Created - name: ' . $this->name . ' email: ' . $this->email;
        Log::info($this->successMessage);

        // Normally would create the record in the database
        //        Contact::create([
        //            'name' => $this->name,
        //            'email' => $this->email,
        //        ]);

        // Once the contact is 'saved' reset the form
        $this->name = "";
        $this->email = "";

        // The successMessage will display under the empty form
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
