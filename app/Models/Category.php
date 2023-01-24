<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Category extends Model
{
    use HasFactory, SoftDeletes;
    public function getImageAttribute($value = '')
    {
        if (!empty($value)) {
            return asset('/uploads/product/' . $value);
        }
        return asset('/merchant/images/noImage.png');
    }
}
