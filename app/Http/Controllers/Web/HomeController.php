<?php

namespace App\Http\Controllers\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeController extends Model
{
    use HasFactory;
    public function index(){
        return view('Web::home');
    }
}
