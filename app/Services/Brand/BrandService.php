<?php

namespace App\Services\Brand;

use App\DataTransferObjects\BrandDto;
use App\Models\Brand;

class BrandService
{
    public function store(BrandDto $dto)
    {
        return Brand::create(
            [
                'name' => $dto->name,
                'alias' => $dto->alias,
                'status' => 1
            ]
        );
    }

    public function update($id, BrandDto $dto)
    {
        return Brand::find($id)->update(
            [
                'name' => $dto->name,
                'alias' => $dto->alias,
                'status' => $dto->status
            ]
        );
    }

    public function delete($id)
    {
        return Brand::where('id', $id)
            ->where('status', '!=', -1)
            ->update(['status' => -1]);
    }
}
