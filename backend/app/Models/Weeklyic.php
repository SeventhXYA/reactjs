<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weeklyic extends Model
{
    use HasFactory;
    protected $table = 'weeklyic';
    protected $fillable = [
        'id', 'user_id', 'periode_id', 'weeklyic', 'descweeklyic'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function periodeweekly()
    {
        return $this->belongsTo(Periodeweekly::class);
    }
}
