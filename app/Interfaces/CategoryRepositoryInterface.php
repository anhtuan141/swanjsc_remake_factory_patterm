<?php

namespace App\Interfaces;

use App\Http\Requests\Api\Category\CategoryStoreRequest;
use App\Http\Requests\Api\Category\CategoryUpdateRequest;
use App\Models\Category;

interface CategoryRepositoryInterface
{
    /**
     * @param $queryParameter
     * @return mixed
     */
    public function getListCategory($queryParameter);

    /**
     * @param int $id
     * @param $queryParameter
     * @return mixed
     */
    public function getByID(int $id, $queryParameter);

    /**
     * @param $alias
     * @return mixed
     */
    public function checkCategoryExist($alias);

    /**
     * @param CategoryStoreRequest $request
     * @return mixed
     */
    public function storeCategory(CategoryStoreRequest $request);

    /**
     * @param CategoryUpdateRequest $request
     * @param Category|null $category
     * @param int $id
     * @return mixed
     */
    public function updateCategory(CategoryUpdateRequest $request, Category $category = null, int $id);

    /**
     * @param int $id
     * @return mixed
     */
    public function destroyCategory(int $id);
}
