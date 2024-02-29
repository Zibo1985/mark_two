<?php
 
namespace App\Livewire;
 
use App\Models\User;
use Livewire\Component;
 
class Counter extends Component
{
   
    public function render()
    {
        return view('search-users', [
            'users' => User::search($this->search),
        ]);
    }
}