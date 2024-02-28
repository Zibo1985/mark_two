<?php

namespace App\Livewire;

use Livewire\Attributes\Validate;
use Livewire\Component;
use App\Models\Companys;

class Company extends Component
{
    #[Validate('required|min:2')]
        public $name;
    public $company = 'keine Firma';

    
    

    public function createNewCompany()
    {
        $this->validate(); 
        $company = Companys::create([
            "name" => $this->name,
            'owner_id' => auth()->id()
        ]);

        return $company;
    }
    public function render()
    {


        $this->company = Companys::ownerOf([auth()->user()->id]);
        
        if ($this->company->isEmpty()) {
            return view('livewire.noCompany');
        } else {
            return view('livewire.company', [
                'companys' => $this->company
            ]);
        }
    }
}
