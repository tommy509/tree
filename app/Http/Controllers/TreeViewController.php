<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Affiliate;
use Illuminate\Http\Request;

class TreeViewController extends Controller
{
    public function loadByUser($id=null){
       $users = User::all();
       dd($users);
    }
}
