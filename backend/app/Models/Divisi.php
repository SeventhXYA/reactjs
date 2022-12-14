<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Divisi extends Model
{
    use HasFactory;
    protected $table = 'divisi';
    protected $fillable = [
        'id', 'divisi'
    ];

    public function user()
    {
        return $this->hasMany(User::class);
    }
    // public function user()
    // {
    //     return $this->hasMany(User::class);
    // }
}
