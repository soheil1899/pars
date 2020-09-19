<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subattribute extends Model
{





    public function attribute_values()
    {
        return $this->hasMany(Subattribute_value::class);
    }

    public function product_values()
    {
        return $this->hasOne(Product_subattribute::class);
    }


    public function group_attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}
