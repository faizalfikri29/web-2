<?php

namespace App\Livewire\Ruang;
use Livewire\Component;
use App\Models\Ruang; 

class ListRuang extends Component
{
    public function render()
    {
        return view('livewire.ruang.list-ruang', [ 
           'ruangs' => Ruang::all(), 
       ]);
    }
}
