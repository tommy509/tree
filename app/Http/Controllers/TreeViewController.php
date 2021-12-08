<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Affiliate;
use Illuminate\Http\Request;

class TreeViewController extends Controller
{
    public function loadByUser($id=null){
       $user = User::find(108);
       $affiliate = Affiliate::find(92);
       dd($user);
    }
}
