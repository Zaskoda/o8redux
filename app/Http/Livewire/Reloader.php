<?php

namespace App\Http\Livewire;
use App\Services\EVMDB\EVMDBService;
use App\Models\EVMNetwork;

use Livewire\Component;

class Reloader extends Component
{

    public function reload(EVMDBService $evm)
    {
        $evm->update();
    }

    public function render()
    {
        return view('livewire.reloader',[
            'networks' => EVMNetwork::all()
          ]);
    }
}
