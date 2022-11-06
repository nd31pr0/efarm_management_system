<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'name', 
    ];

    public function delegation()
    {
        $this->hasMany(Delegation::class);
    }

    public function divisions()
    {
        return $this->hasMany(Division::class);
    }

    public function farmers(){
         return $this->hasManyThrough(
            Farmers::class,
            Division::class,
            'region_id',
            'division_id',
            'id',
            'id'
        );
    }
}
