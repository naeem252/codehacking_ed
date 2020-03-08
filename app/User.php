<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    //
    protected $fillable=['name','email'];
    protected $hidden=['password'];

    public function role(){
        return $this->belongsTo('App\Role');
    }
}
