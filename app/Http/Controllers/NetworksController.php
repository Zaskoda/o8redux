<?php

namespace App\Http\Controllers;

use App\Models\EVMNetwork;
use Illuminate\Support\Facades\Redirect;

class NetworksController extends Controller
{
  public function view()
  {
    return view('networks',[
      'networks' => EVMNetwork::all()
    ]);
  }

  public function update(EVMDBService $evm)
  {
    $evm->update();
    return Redirect::route('networks');
  }
}
