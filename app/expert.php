<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class expert extends Model
{
    ////

    use SoftDeletes;

    protected $table = 'expert';

    protected $primaryKey = 'expert_id';
    
    protected $keyType = 'integer';

    protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function categoryevent()
    {
        return $this->hasMany('App\Event');
    }

}
