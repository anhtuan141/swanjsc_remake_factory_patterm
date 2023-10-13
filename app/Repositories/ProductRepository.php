<?php

namespace App\Repositories;

use App\Http\Requests\Api\Product\ProductStoreRequest;
use App\Http\Requests\Api\Product\ProductUpdateRequest;
use App\Interfaces\ProductRepositoryInterface;
use App\Models\Product;

class ProductRepository implements ProductRepositoryInterface
{
    /**
     * @var Product
     */
    private $product;

    /**
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
    }

    /**
     * @param $queryParameter
     * @return void
     */
    public function getListProduct($queryParameter)
    {
        // TODO: Implement getListProduct() method.
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
     * @param int $id
     * @param $alias
     * @return void
     */
    public function checkProductExists(int $id, $alias)
    {
        // TODO: Implement checkProductExists() method.
    }

    /**
     * @param ProductStoreRequest $request
     * @return void
     */
    public function storeProduct(ProductStoreRequest $request)
    {
        // TODO: Implement storeProduct() method.
    }

    /**
     * @param ProductUpdateRequest $request
     * @param Product|null $product
     * @param int $id
     * @return void
     */
    public function updateProduct(ProductUpdateRequest $request, Product $product = null, int $id)
    {
        // TODO: Implement updateProduct() method.
    }

    /**
     * @param int $id
     * @return void
     */
    public function destroyProduct(int $id)
    {
        // TODO: Implement destroyProduct() method.
    }
}
