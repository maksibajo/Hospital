<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'code', 'producer', 'description', 'product_type_id', 'product_category_id'
    ];

    public function type()
    {
        return $this->belongsTo(ProductType::class, 'product_type_id');
    }

//    public function category()
//    {
//        return $this->belongsTo(ProductCategory::class, 'product_category_id');
//    }

    public function warehouses()
    {
        return $this->belongsToMany(Warehouse::class, 'product_warehouse');
    }
}
