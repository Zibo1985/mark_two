<?php

namespace App\Livewire;

use Livewire\Component;

class ChatBot extends Component
{
    public $answer = '';
    
    function ask()
    {
        $this->answer = fake()->name();
    }

    public function render()
    {
        return view('livewire.components.newName', [
            'answer' => $this->answer,
        ]);
    }
}
