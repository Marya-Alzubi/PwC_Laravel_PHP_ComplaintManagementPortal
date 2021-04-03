<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    protected $guarded = [];
//    protected $fillable = [ 'user_id' , 'device_type' , 'generation' , 'serial_number', 'problem_date' , 'expected_error', 'problem_cause', 'is_urgent'];

    public function user(): \Illuminate\Database\Eloquent\Relations\belongsTo
    {
        return $this->belongsTo('App\User');
    }

}
