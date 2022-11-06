<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Division extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name',
        'region_id',
    ];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }

    public function farmers()
    {
        return $this->hasMany(Farmer::class);
    }

    public function cooperatives()
    {
        return $this->belongsToMany(Cooperative::class)->using(DivisionCooperative::class);
    }
}
