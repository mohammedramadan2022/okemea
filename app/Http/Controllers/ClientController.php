<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function clients(){
        $clients = User::paginate(10);
        return view('Admin.clients.clients' , compact('clients'));

    }
}
