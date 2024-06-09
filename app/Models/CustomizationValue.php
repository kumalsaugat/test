<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomizationValue extends Model
{
    use HasFactory;

    protected $fillable = [
        'value',
        'customization_option_id'
    ];

    public function customizationOption()
    {
        return $this->belongsTo(CustomizationOption::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }
}
