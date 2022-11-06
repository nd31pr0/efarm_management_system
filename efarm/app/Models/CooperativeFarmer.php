<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CooperativeFarmer extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'cooperative_id',
        'farmer_id',
        'address'
    ];

    protected $casts = [
        'address' => 'object'
    ];

    public function cooperative()
    {
        return $this->belongsTo(Cooperative::class);
    }

    public function farmer()
    {
        return $this->belongsTo(Farmer::class);
    }
}
