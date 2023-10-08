<?php

namespace App\DataTransferObjects;

use App\Http\Requests\Api\Product\ProductStoreRequest;
use App\Http\Requests\Api\Product\ProductUpdateRequest;
use App\Models\Product;

class ProductDto
{
    public $name_vi, $name_en, $alias, $image,$image_2,$image_3,
        $supplier_id, $category_id, $farming_area, $product_size,
        $packing_standard, $summary, $status;

    public function __construct(
        $name_vi, $name_en, $alias, $image, $image_2, $image_3,
        $supplier_id, $category_id, $farming_area, $product_size,
        $packing_standard, $summary, $status
    )
    {
        $this->name_vi = $name_vi;
        $this->name_en = $name_en;
        $this->alias = $alias;
        $this->image = $image;
        $this->image_2 = $image_2;
        $this->image_3 = $image_3;
        $this->supplier_id = $supplier_id;
        $this->category_id = $category_id;
        $this->farming_area = $farming_area;
        $this->product_size = $product_size;
        $this->packing_standard = $packing_standard;
        $this->summary = $summary;
        $this->status = $status;
    }

    public static function storeRequest(ProductStoreRequest $request)
    {
        return new self(
            $request->name_vi,
            $request->name_en,
            $request->alias,
            $request->image,
            $request->image_2,
            $request->image_3,
            $request->supplier_id,
            $request->category_id,
            $request->farming_area,
            $request->product_size,
            $request->packing_standard,
            $request->summary,
            $request->status
        );
    }

    public static function updateRequest(ProductUpdateRequest $request, Product $product )
    {
        return new self(
            $request->name_vi ?: $product->name_vi,
            $request->name_en ?: $product->name_en,
            $request->alias ?: $product->alias,
            $request->image ?: $product->image,
            $request->image_2 ?: $product->image_2,
            $request->image_3 ?: $product->image_3,
            $request->supplier_id ?: $product->supplier_id,
            $request->category_id ?: $product->category_id,
            $request->farming_area ?: $product->farming_area,
            $request->product_size ?: $product->product_size,
            $request->packing_standard ?: $product->packing_standard,
            $request->summary ?: $product->summary,
            $request->status ?: $product->status
        );
    }
}
