<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataPekerjaan extends Model
{
    use HasFactory;

    protected $table = 'data_pekerjaans';

    protected $guarded = [];
}