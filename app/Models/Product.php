<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name',
        'description',
        'price',
        'imageUrl',
        'product_category_id',
    ];


    /* Relaciones */

    public function product_category() {

        return $this->belongsTo(ProductCategory::class);
    }


    public function product_type() {

        return $this->belongsTo(ProductType::class);
    }


    // public function getCategoryNameAttribute() {

    //     if ($this->product_category_id)
    //         return $this->product_category->name;

    //     return 'Sin Categoría';

    // }

}
