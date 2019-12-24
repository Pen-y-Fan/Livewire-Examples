<?php

namespace Tests\Unit;

use App\Http\Livewire\ContactForm;
use App\Http\Livewire\Counter;
use Livewire\Livewire;
use Tests\TestCase;

class CounterTest extends TestCase
{


    /** @test */
    function can_increment()
    {
        $counter = Livewire::test(Counter::class);

        $this->assertEquals(0, $counter->count);

        $counter->increment();

        $this->assertEquals(1, $counter->count);

        $counter->decrement();

        $this->assertEquals(0, $counter->count);

        $counter->set('count', 1);

        $this->assertEquals(1, $counter->count);
    }

    /**
     * End-to-end Testing
     *
     * @test
     */
    function can_increment2()
    {
        Livewire::test(Counter::class)
            ->assertSee(0)
            ->call('increment')
            ->assertSee(1)
            ->call('decrement')
            ->assertSee(0)
            ->set('count', 5)
            ->assertSee(5)
            ->set(['count' => 2])
            ->assertSee(2)
            ->call('emitFoo')
            ->assertEmitted('foo')
            ->call('emitFooWithParam', 'bar')
            ->assertEmitted('foo', 'bar')
            ->call('emitFooWithParam', 'bar')
            ->assertEmitted('foo', function ($event, $params) {
                return $event === 'foo' && $params === ['bar'];
            });
    }
}

