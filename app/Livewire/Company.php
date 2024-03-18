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
    public int $id;
    public function createNewCompany()
    {
        $this->validate();
        $company = Companys::create([
            "name" => $this->name,
            'member' => auth()->id()
        ]);

        return $company;
    }
    public function deleteCompany()
    {
        $companyToDelete = Companys::find($this->id);
        $companyToDelete->delete();
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
