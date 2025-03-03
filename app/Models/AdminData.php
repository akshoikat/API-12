<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminData extends Model
{
    use HasFactory;

    protected $fillable = ['admin_id', 'poster_id', 'device', 'data'];
}
