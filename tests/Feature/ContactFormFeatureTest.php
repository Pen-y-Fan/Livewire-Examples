<?php

namespace Tests\Feature;

use App\Http\Livewire\ContactForm;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Livewire\Livewire;
use Tests\TestCase;

class ContactFormFeatureTest extends TestCase
{
    /**
     * @test
     */
    public function nameAndEmailFieldsAreRequiredForSavingAContact()
    {
        Livewire::test('contact-form')
            ->set('name', 'any')
            ->set('email', 'thing')
            ->assertHasErrors(['name', 'email']);
    }
}
