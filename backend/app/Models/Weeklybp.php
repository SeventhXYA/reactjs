<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weeklybp extends Model
{
    use HasFactory;
    protected $table = 'weeklybp';
    protected $fillable = [
        'id', 'user_id', 'periode_id', 'weeklybp', 'descweeklybp'
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
