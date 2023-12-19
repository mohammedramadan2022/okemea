<?php

namespace App\Models\Web;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeController extends Model
{
    use HasFactory;
    public function index(){
        return view('Web::home');
    }
}
