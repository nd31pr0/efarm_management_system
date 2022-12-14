<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
 

class Delegation extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'region_id', 
        'name', 
        'address'
    ];

    protected $casts = [
        'address' => 'object'
    ];

    public function region()
    {
        $this->belongsTo(Region::class);
    }
}
