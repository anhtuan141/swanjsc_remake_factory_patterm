<?php

namespace App\DataTransferObjects;

use App\Http\Requests\Api\Supplier\SupplierStoreRequest;
use App\Http\Requests\Api\Supplier\SupplierUpdateRequest;
use App\Models\Supplier;

class SupplierDto
{
    public $name, $alias, $status;
    public function __construct($name, $alias, $status)
    {
        $this->name = $name;
        $this->alias = $alias;
        $this->status = $status;
    }

    public static function storeRequest(SupplierStoreRequest $request)
    {
        return new self(
          $request->name,
          $request->alias,
          $request->status
        );
    }

    public static function updateRequest(SupplierUpdateRequest $request, Supplier $supplier)
    {
        return new self(
            $request->name ?: $supplier->name,
            $request->alias ?: $supplier->alias,
            $request->status ?: $supplier->status
        );
    }

}
