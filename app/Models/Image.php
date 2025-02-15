<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'product_id',
        'customization_value_id'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function customizationValue()
    {
        return $this->belongsTo(CustomizationValue::class);
    }
}
