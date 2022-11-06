<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 

class Farmer extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'first_name', 
        'last_name', 
        'phone',
        'address',
        'dimensions',
        'division_id'
    ];

    protected $casts = [
        'address' => 'array',
        'dimensions' =>'array'
    ];


    public function division()
    {
        return $this->belongsTo(Division::class);
    }

    public function farms()
    {
        return $this->hasMany(Farm::class)->where('owner','farmer');
    }

    public function cooperative()
    {
        return $this->belongsTo(Cooperative::class);
    }
}
