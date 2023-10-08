<?php

namespace App\DataTransferObjects;

use App\Http\Requests\Api\Category\CategoryStoreRequest;
use App\Http\Requests\Api\Category\CategoryUpdateRequest;
use App\Models\Category;

class CategoryDto
{
    public $parent_id, $name, $alias, $image, $summary, $status;

    public function __construct($parent_id, $name, $alias, $image, $summary, $status)
    {
        $this->parent_id = $parent_id;
        $this->name = $name;
        $this->alias = $alias;
        $this->image = $image;
        $this->summary = $summary;
        $this->status = $status;
    }

    public static function storeRequest(CategoryStoreRequest $request)
    {
        return new self(
            $request->parent_id,
            $request->name,
            $request->alias,
            $request->image,
            $request->summary,
            $request->status,
        );
    }

    public static function updateRequest(CategoryUpdateRequest $request, Category $category)
    {
        return new self(
            $request->parent_id ?: $category->parent_id,
            $request->name ?: $category->name,
            $request->alias ?: $category->alias,
            $request->image ?: $category->image,
            $request->summary ?: $category->summary,
            $request->status ?: $category->status,
        );
    }
}
