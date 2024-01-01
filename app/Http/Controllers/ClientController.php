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
        return view('Admin::clients.clients', compact('clients'));

    }
    public function deletedClients()
    {
        $clients = User::onlyTrashed()->paginate(10);
        return view('Admin::clients.clients', compact('clients'));

    }

    public function clientDevices($clientId)
    {

        $client = User::where('id' , $clientId)->withTrashed()->first();
        if($client){

            $devices = DeviceUser::where('user_id', $client->id)->paginate(10);
            return view('Admin.clients.client-devices', compact('devices', 'client'));

        }
        Alert::error('Ooops!' ,'Client Not Found');

        return back();

    }

    public function clientDelete($clientId)
    {

        $client = User::findOrFail($clientId);
        $client->delete();
        Alert::success('Congrates!' ,'Delete Success');

        return back();

    }

    public function clientForceDelete($clientId)
    {

        $client = User::where('id' , $clientId)->withTrashed()->first();
        if ($client){
            $devices =DeviceUser::where('user_id' , $client->id)->get();


            $devices->each(function ($device) {
                $device->forceDelete();
            });
            $client->forceDelete();
        }
        Alert::success('Congrates!' ,'Delete Success');

        return back();

    }
}
