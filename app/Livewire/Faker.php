<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Kunden;


class Faker extends Component
{
   
    public function fakeKunden()
    {
        Kunden::factory(10)->create();
    }
    public function render()
    {
        $kunden = Kunden::all();
        return view(
            'livewire.components.faker',
            [
                'kunden' => $kunden
            ]
        );
    }
}
