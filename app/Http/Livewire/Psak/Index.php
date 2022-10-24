<?php

namespace App\Http\Livewire\Psak;

use Livewire\Component;
use App\Models\PsakUpload;

class Index extends Component
{
    public function render()
    {
        $data = PsakUpload::with('company')->orderBy('id','desc');
        
        return view('livewire.psak.index')->with(['data'=>$data->paginate(100)]);
    }
}
