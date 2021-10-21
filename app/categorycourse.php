<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categorycourse extends Model
{
    //
    protected $table = 'category_course';

    protected $primaryKey = 'category_course_id';
    
    protected $keyType = 'integer';

    // protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function course()
    {
        return $this->hasMany('App\course');
    }
}
