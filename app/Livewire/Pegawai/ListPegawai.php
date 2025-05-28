<?php

namespace App\Livewire\Pegawai;

use Livewire\Component;
use App\Models\Pegawai;

class ListPegawai extends Component
{
    public function delete($id)
    {
        Pegawai::find($id)?->delete();
        session()->flash('message', 'Pegawai berhasil dihapus.');
    }

    public function render()
    {
        return view('livewire.pegawai.list-pegawai', [
            'pegawais' => Pegawai::with('unitKerja')->get()
        ]);
    }
}
