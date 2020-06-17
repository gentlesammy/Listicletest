<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Listicle extends Model
{
    use SoftDeletes;
    use \Spatie\Tags\HasTags;
    //turned off till i have forms
    protected $guarded = [];

    //relationship with user, listicle belongs to a user
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
