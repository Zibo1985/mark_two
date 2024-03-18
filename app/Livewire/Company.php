<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Companys;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Log;

class Company extends Component
{
    
    #[Validate('required|min:2')]
    public $name;
    public $company = 'keine Firma';
    public int $id;
    public function createNewCompany()
    {
        Log::debug('An informational message.');
        $this->validate();
        $company = Companys::create([
            "name" => $this->name,
            'member' => auth()->id()
        ]);

        return $company;
    }
    public function deleteCompany($companyId)
    {     
        Log::debug($companyId);   
        Companys::remove($companyId);
    }
    public function render()
    {
        $this->company = Companys::memberOf([auth()->user()->id]);
        if ($this->company->isEmpty()) {
            return view('livewire.noCompany');
        } else {
            return view('livewire.company', [
                'companys' => $this->company,
            ]);
        }
    }
}
