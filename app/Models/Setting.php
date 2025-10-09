<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
     protected $fillable = [
        'primary_color',
        'secondary_color',
        'dark_color',
        'gray_color',
        'light_gray_color',
     ];
}
