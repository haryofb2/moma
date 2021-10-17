<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Illuminate\Database\Eloquent\SoftDeletes;

class categoryevent extends Model
{
    ////

    // use SoftDeletes;

    protected $table = 'category_event';

    protected $primaryKey = 'category_event_id';
    
    protected $keyType = 'integer';

    // protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function categoryevent()
    {
        return $this->hasMany('App\Event');
    }

}
