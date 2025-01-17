<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lead extends Model
{
    use HasFactory;

    protected $fillable = [

        'name',
        'email',
        'phone_number',
        'message',
        'house_id',
    ];

    public function house()
    {

        return $this->belongsTo(House::class);
    }
}
