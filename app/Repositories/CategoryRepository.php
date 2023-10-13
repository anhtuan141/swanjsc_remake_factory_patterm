<?php

namespace App\Repositories;

use App\Http\Requests\Api\Category\CategoryStoreRequest;
use App\Http\Requests\Api\Category\CategoryUpdateRequest;
use App\Interfaces\CategoryRepositoryInterface;
use App\Models\Category;

class CategoryRepository implements CategoryRepositoryInterface
{
    /**
     * @var Category
     */
    private $category;

    /**
     * @param Category $category
     */
    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    /**
     * @param $queryParameter
     * @return void
     */
    public function getListCategory($queryParameter)
    {
        // TODO: Implement getListCategory() method.
    }

    /**
     * @param int $id
     * @param $queryParameter
     * @return void
     */
    public function getByID(int $id, $queryParameter)
    {
        // TODO: Implement getByID() method.
    }

    /**
     * @param $alias
     * @return void
     */
    public function checkCategoryExist($alias)
    {
        // TODO: Implement checkCategoryExist() method.
    }

    /**
     * @param CategoryStoreRequest $request
     * @return void
     */
    public function storeCategory(CategoryStoreRequest $request)
    {
        // TODO: Implement storeCategory() method.
    }

    /**
     * @param CategoryUpdateRequest $request
     * @param Category|null $category
     * @param int $id
     * @return void
     */
    public function updateCategory(CategoryUpdateRequest $request, Category $category = null, int $id)
    {
        // TODO: Implement updateCategory() method.
    }

    /**
     * @param int $id
     * @return void
     */
    public function destroyCategory(int $id)
    {
        // TODO: Implement destroyCategory() method.
    }
}
