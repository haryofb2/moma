<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    //
    protected $table = 'course';

    protected $primaryKey = 'course_id';
    
    protected $keyType = 'integer';

    // protected $dates = ['deleted_at'];

    protected $guarded = [];

    public function categorycourse()
    {
        return $this->belongsTo('App\categorycourse','category_course_id','category_course_id');
    }

    public function coursetype()
    {
        return $this->belongsTo('App\coursetype','course_type_id','course_type_id');
    }
}
