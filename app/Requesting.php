<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Requesting extends Model
{
    //
    protected $fillable = [
        'venue','time','day'
    ];
    public function student(){
        return $this->belongsTo(Student::class);
    }
    public function lecturer(){
        return $this->belongsTo(Student::class);
    }
}
