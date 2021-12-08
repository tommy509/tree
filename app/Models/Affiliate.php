<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class Affiliate extends Model
{
    protected $table = 'wp_uap_affiliates';

    protected $fillable = [
        'id',
        'uid',
        'rank_id',
    ];


    public function user(){
        return $this->belongsTo('App\Models\User', 'id', 'uid');
        
    }

}
