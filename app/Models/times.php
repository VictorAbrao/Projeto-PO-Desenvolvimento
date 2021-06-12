<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class times extends Model
{
    protected $fillable = ['nome','historia'];
    protected $guarded = ['id', 'created_at', 'update_at'];
    protected $table = 'times';
}
