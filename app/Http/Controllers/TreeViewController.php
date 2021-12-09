<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Affiliate;
use App\Models\Referral;
use Illuminate\Http\Request;
use App\Helpers\CategoryHierarchy;
class TreeViewController extends Controller
{



    public function loadByUser($id=null){
         ini_set('max_execution_time', '3000');
         $user = User::with('affiliate')->where('ID',141)->first();
         $referrals = $user->affiliate->referrals /*Referral::where('affiliate_id',92)->get()*/;
         $children  = [];
        foreach($referrals as $referral){ 
           $child = [];
         if (!empty($referral->user->affiliate->referrals)) {
           $name = $referral->user->display_name;
           $child["name"] = $name;
           $child["children"] = $this->createNode($referral->user->affiliate->referrals);
           }else{
           $child["name"] = $name;
           }
           array_push($children, $child);
          }
    
          $tree = [
         'name'     => $user->display_name,
         'children' => $children
                  ];
         return json_encode($tree);
         
    }

    public function createNode($referrals){
        $children  = [];
        foreach($referrals as $referral){ 
            $child = [];
            if (!empty($referral->user->affiliate->referrals)) {
              $name = $referral->user->display_name;
              $child["name"] = $name;
              $child["children"] = $this->createNode($referral->user->affiliate->referrals);
              }else{
              $child["name"] = $name;
              }
              array_push($children, $child);
             }
       
        return $children;
    }

    


}
