<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class Event extends Model
{
    //

    // use SoftDeletes;

    protected $table = 'events';

    protected $primaryKey = 'event_id';
    
    protected $keyType = 'integer';

    // protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function categoryevent()
    {
        return $this->belongsTo('App\categoryevent','category_event_id','category_event_id');
    }

    public function rewardevent()
    {
        return $this->belongsTo('App\rewardevent','reward_event_id','reward_event_id');
    }

    public function eventtype()
    {
        return $this->belongsTo('App\eventtype','event_type_id','event_type_id');
    }

    public function expert()
    {
        return $this->belongsTo('App\expert','speaker','expert_id');
    }
}
