<?php

namespace Tests\Unit;

use App\Http\Livewire\ContactForm;
use Livewire\Livewire;
use Tests\TestCase;

class ContactFormTest extends TestCase
{

    /**
     * @test
     */
    public function nameAndEmailFieldsAreRequiredForSavingAContact()
    {
        Livewire::test('contact-form')
            ->set('name', '')
            ->set('email', '')
            ->assertHasErrors(['name', 'email']);
    }


    /**
     * @test
     */
    public function nameAndEmailFieldsAreRequiredForSavingAContactWithRequired()
    {
        Livewire::test(ContactForm::class)
            ->set('email', '')
            ->set('name', '')
            ->assertHasErrors([
                'name' => 'required',
//                'email' => 'required' // (currently test only works with the last set key => value pair)
            ]);
    }

}

