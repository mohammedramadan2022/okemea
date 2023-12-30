<?php

namespace App\Http\Controllers;

use App\Models\DeviceUser;
use App\Models\User;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ClientController extends Controller
{
    public function clients()
    {
        $clients = User::paginate(10);
        return view('Admin.clients.clients', compact('clients'));

    }

    public function clientDevices($clientId)
    {

        $client = User::findOrFail($clientId);
        $devices = DeviceUser::where('user_id', $client->id)->paginate(10);
        return view('Admin.clients.client-devices', compact('devices', 'client'));

    }

    public function clientDelete($clientId)
    {

        $client = User::findOrFail($clientId);
        $client->delete();
        Alert::success('Congrates!' ,'Delete Success');

        return back();

    }
}
