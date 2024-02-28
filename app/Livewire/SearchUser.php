<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use App\Models\Kunden;

class SearchUser extends Component
{

    public $vorname;
    public $nachname;
    public $firma;
    public $ort;
    public function render()
    {
        if (
            strlen($this->vorname) >= 3 ||
            strlen($this->nachname) >= 3 ||
            strlen($this->firma) >= 3 ||
            strlen($this->ort) >= 3
        ) {
            $item = Kunden::search($this->vorname, $this->nachname, $this->firma, $this->ort);
        } else {
            $item = [];
        }
        //   $item = User::all();

        return view('livewire.search-user', ['item' => $item]);
    }
}
