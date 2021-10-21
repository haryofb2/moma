<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class coursetype extends Model
{
    //
    protected $table = 'course_type';

    protected $primaryKey = 'course_type_id';
    
    protected $keyType = 'integer';

    // protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function course()
    {
        return $this->hasMany('App\course');
    }
}
