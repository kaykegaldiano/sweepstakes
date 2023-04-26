<?php

namespace App\Models;

use App\Traits\HasUUID;
use Illuminate\Database\Eloquent\Model;

class Sweepstake extends Model
{
    use HasUUID;

    protected $fillable = [
        'user_id',
        'number_of_winners',
        'end_date',
        'description'
    ];

    public $incrementing = false;
    protected $keyType = 'string';

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function participants()
    {
        return $this->hasMany(Participant::class);
    }
}
