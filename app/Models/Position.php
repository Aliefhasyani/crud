<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    protected $table = 'positions';

    protected $fillable = [
        'position_name',
        'employer_id'
    ];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
