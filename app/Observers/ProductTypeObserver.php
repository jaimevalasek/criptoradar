<?php

namespace App\Observers;

use App\Models\ProductType;
use Illuminate\Support\Str;

class ProductTypeObserver
{
    /**
     * @param ProductType $productType
     * @return void
     */
    public function creating(ProductType $productType)
    {
        $productType->slug = Str::slug($productType->name);
    }

    /**
     * @param ProductType $productType
     * @return void
     */
    public function updating(ProductType $productType)
    {
        $productType->slug = Str::slug($productType->name);
    }
}
