<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cooperative extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name', 
        'email', 
        'phone',
        'address',
    ];

    protected $casts = [
        'address' => 'object'
    ];

    public function division()
    {
        return $this->belongsToMany(Division::class)->using(DivisionCooperative::class);
    }

    public function farms()
    {
        return $this->hasMany(Farm::class,'owner_id','id')->where('owner','cooperative');
    }

    public function farmer()
    {
        return $this->belongsToMany(Farmer::class)->using(CooperativeFarmer::class);
    }
}
