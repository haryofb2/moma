<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class eventtype extends Model
{
    ////

    // use SoftDeletes;

    protected $table = 'event_type';

    protected $primaryKey = 'event_type_id';
    
    protected $keyType = 'integer';

    // protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function categoryevent()
    {
        return $this->hasMany('App\Event');
    }

}
