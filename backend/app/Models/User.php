<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = 'user';
    protected $fillable = [
        'id', 'pict', 'name', 'gender_id', 'divisi_id', 'nohp', 'username', 'email', 'password', 'level_id', 'address'
    ];

    public function dailysd()
    {
        return $this->hasMany(Dailysd::class);
    }
    public function dailybp()
    {
        return $this->hasMany(Dailybp::class);
    }
    public function dailykl()
    {
        return $this->hasMany(Dailykl::class);
    }
    public function dailyic()
    {
        return $this->hasMany(Dailyic::class);
    }

    public function divisi()
    {
        return $this->belongsTo(Divisi::class);
    }

    public function level()
    {
        return $this->belongsTo(Level::class);
    }

    public function gender()
    {
        return $this->belongsTo(Gender::class);
    }

    public function longtermtarget()
    {
        return $this->hasMany(Longtermtarget::class);
    }

    public function monthlytargetsd()
    {
        return $this->hasMany(Monthlytargetsd::class);
    }

    public function monthlytargetbp()
    {
        return $this->hasMany(Monthlytargetbp::class);
    }

    public function monthlytargetkl()
    {
        return $this->hasMany(Monthlytargetkl::class);
    }

    public function monthlytargetic()
    {
        return $this->hasMany(Monthlytargetic::class);
    }

    public function weekly()
    {
        return $this->hasMany(Weekly::class);
    }

    // public function weeklysd()
    // {
    //     return $this->hasMany(Weeklysd::class);
    // }

    // public function weeklybp()
    // {
    //     return $this->hasMany(Weeklybp::class);
    // }

    // public function weeklykl()
    // {
    //     return $this->hasMany(Weeklykl::class);
    // }

    // public function weeklyic()
    // {
    //     return $this->hasMany(Weeklyic::class);
    // }


    protected $hidden = [
        'password',
        'remember_token',
    ];
}
