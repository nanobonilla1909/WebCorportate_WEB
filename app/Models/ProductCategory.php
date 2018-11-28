<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class ProductCategory extends Model
{
    protected $fillable = [
        'code',
        'name',
        'image',
        'icon',
        'depth',
        'left',
        'right,'
    ];

    public function products() {

        return $this->hasMany(Product::class);
    }


}
