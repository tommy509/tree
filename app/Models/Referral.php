<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Referral extends Model
{
    protected $table = 'wp_uap_affiliate_referral_users_relations';

    protected $fillable = [
        'id',
        'uid',
        'rank_id',
    ];


    public function user(){
        return $this->belongsTo('App\Models\User', 'referral_wp_uid', 'id');
    }
    
    public function affiliate(){
        return $this->belongsTo('App\Models\Affiliate');
    }
    
}
