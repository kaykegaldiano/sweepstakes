<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Participant extends Model
{
    use HasFactory;

    protected $fillable = [
        'sweepstake_id',
        'name',
        'email'
    ];

    public function sweepstake()
    {
        return $this->belongsTo(Sweepstake::class);
    }
}
