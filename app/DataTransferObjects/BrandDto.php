<?php

namespace App\DataTransferObjects;

use App\Http\Requests\Api\Brand\BrandStoreRequest;
use App\Http\Requests\Api\Brand\BrandUpdateRequest;
use App\Models\Brand;

class BrandDto
{
    public $name, $alias, $status;
    public function __construct($name, $alias, $status)
    {
        $this->name = $name;
        $this->alias = $alias;
        $this->status = $status;
    }

    public static function storeRequest(BrandStoreRequest $request)
    {
        return new self(
            $request->name,
            $request->alias,
            $request->status
        );
    }

    public static function updateRequest(BrandUpdateRequest $request, Brand $brand)
    {
        return new self(
            $request->name ?: $brand->name,
            $request->alias ?: $brand->alias,
            $request->status ?: $brand->status
        );
    }
}
