<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable  = [
        'user_id',
        'name',
        'image',
        'blood_group',
        'phone',
        'address',
        'district',
        'thana',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
