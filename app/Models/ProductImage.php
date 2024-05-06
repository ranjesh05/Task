<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductImage extends Model
{
    use HasFactory,SoftDeletes;
    public $table="productimages";
    public function getImageAttribute($value)
    {
        // dd($value);


        $value = $this->attributes['image'];

        if ($value == null) {
            return  asset('images/advertisement.png');
        }

        return  asset('/storage').$value;

    }
}
