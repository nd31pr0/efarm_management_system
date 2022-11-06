<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DivisionCooperative extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'cooperative_id',
        'division_id',
        'address'
    ];

    protected $hidden = [
        'region_id'
    ];

    protected $casts = [
        'address' => 'object'
    ];

    public function cooperative()
    {
        return $this->belongsTo(Cooperative::class);
    }

    public function division()
    {
        return $this->belongsTo(Division::class);
    }
}
