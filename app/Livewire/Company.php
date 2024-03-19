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
    public function createNewCompany()
    {
        $this->validate();
        $company = Companys::create([
            "name" => $this->name,
            'member' => auth()->id()
        ]);
        unset($this->name);
        return $company;
    }
    public function deleteCompany($companyId)
    {
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
