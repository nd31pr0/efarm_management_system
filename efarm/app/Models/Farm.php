<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Farm extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'owner', 
        'owner_id',
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

    public function owner()
    {
        switch($this->owner){
            case 'farmer':
                return $this->belongsTo(Farmer::class,'owner_id');
            case 'cooperative':
                return $this->belongsTo(Cooperative::class,'owner_id');
        }
    }
    
}
