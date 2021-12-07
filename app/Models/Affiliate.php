<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class User extends Model
{
    protected $table = 'wp_uap_affiliates';

    protected $fillable = [
        'uid',
        'rank_id',
    ];


    public function user(){
        return $this->belongsTo('App\Models\User');
    }

}
