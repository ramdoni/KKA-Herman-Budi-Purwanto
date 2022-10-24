<?php

namespace App\Http\Livewire\Psak;

use Livewire\Component;
use App\Models\Psak;

class DetailEmployee extends Component
{
    public $data,$employee;

    public function render()
    {
        return view('livewire.psak.detail-employee');
    }

    public function mount(Psak $data)
    {
        $this->data = $data;
        $this->employee = $this->data->employee;
    }
}