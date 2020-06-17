<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Listicle extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    //relationship with user, listicle belongs to a user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
