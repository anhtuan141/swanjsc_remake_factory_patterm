<?php

namespace App\Services\Supplier;

use App\DataTransferObjects\SupplierDto;
use App\Models\Supplier;

class SupplierService
{
    public function store(SupplierDto $dto)
    {
        return Supplier::create(
            [
                'name' => $dto->name,
                'alias' => $dto->alias,
                'status' => 1
            ]
        );
    }

    public function update($id, SupplierDto $dto)
    {
        return Supplier::find($id)->update(
            [
                'name' => $dto->name,
                'alias' => $dto->alias,
                'status' => $dto->status
            ]
        );
    }

    public function delete($id)
    {
        return Supplier::where('id', $id)
            ->where('status', '!=', -1)
            ->update(['status' => -1]);
    }
}
