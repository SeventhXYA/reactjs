<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weeklysd extends Model
{
    use HasFactory;
    protected $table = 'weeklysd';
    protected $fillable = [
        'id', 'user_id', 'periode_id', 'weeklysd', 'descweeklysd'
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
