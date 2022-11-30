<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weeklykl extends Model
{
    use HasFactory;
    protected $table = 'weeklykl';
    protected $fillable = [
        'id', 'user_id', 'periode_id', 'weeklykl', 'descweeklykl'
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
