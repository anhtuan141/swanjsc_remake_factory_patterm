<?php

namespace App\Services\Product;

use App\DataTransferObjects\ProductDto;
use App\Models\Product;

class ProductService
{
    public function store(ProductDto $dto)
    {
        return Product::create(
            [
                'name_vi' => $dto->name_vi,
                'name_en' => $dto->name_en,
                'alias' => $dto->alias,
                'image' => $dto->image,
                'image_2' => $dto->image_2,
                'image_3' => $dto->image_3,
                'supplier_id' => $dto->supplier_id,
                'category_id' => $dto->category_id,
                'farming_area' => $dto->farming_area,
                'product_size' => $dto->product_size,
                'packing_standard' => $dto->packing_standard,
                'summary' => $dto->summary,
                'status' => 1
            ]
        );
    }

    public function update($id, ProductDto $dto)
    {
        return Product::find($id)->update(
            [
                'name_vi' => $dto->name_vi,
                'name_en' => $dto->name_en,
                'alias' => $dto->alias,
                'image' => $dto->image,
                'image_2' => $dto->image_2,
                'image_3' => $dto->image_3,
                'supplier_id' => $dto->supplier_id,
                'category_id' => $dto->category_id,
                'farming_area' => $dto->farming_area,
                'product_size' => $dto->product_size,
                'packing_standard' => $dto->packing_standard,
                'summary' => $dto->summary,
                'status' => $dto->status
            ]);
    }

    public function delete($id)
    {
        return Product::where([
            'id' => $id,
            ['status', '!=', -1]
        ])
            ->update(['status' => -1]);
    }
}
