<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class rewardevent extends Model
{
    ////

    // use SoftDeletes;

    protected $table = 'reward_event';

    protected $primaryKey = 'reward_event_id';
    
    protected $keyType = 'integer';

    // protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function categoryevent()
    {
        return $this->hasMany('App\Event');
    }

}
