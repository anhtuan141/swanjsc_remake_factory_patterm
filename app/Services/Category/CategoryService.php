<?php

namespace App\Services\Category;

use App\DataTransferObjects\CategoryDto;
use App\Models\Category;

class CategoryService
{
    public function store(CategoryDto $dto)
    {
        return Category::create(
            [
                'name' => $dto->name,
                'alias' => $dto->alias,
                'image' => $dto->image,
                'summary' => $dto->summary,
                'parent_id' => 0,
                'status' => 1
            ]
        );
    }

    public function update($id, CategoryDto $dto)
    {
        return Category::find($id)->update(
            [
                'name' => $dto->name,
                'alias' => $dto->alias,
                'image' => $dto->image,
                'summary' => $dto->summary,
                'parent_id' => $dto->parent_id,
                'status' => $dto->status
            ]
        );
    }

    public function delete($id)
    {
        return Category::where('id', $id)
            ->where('status', '!=', -1)
            ->update(['status' => -1]);
    }
}
