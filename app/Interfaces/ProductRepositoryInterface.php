<?php

namespace App\Interfaces;

use App\Http\Requests\Api\Product\ProductStoreRequest;
use App\Http\Requests\Api\Product\ProductUpdateRequest;
use App\Models\Product;

interface ProductRepositoryInterface
{
    /**
     * @param $queryParameter
     * @return mixed
     */
    public function getListProduct($queryParameter);

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
    public function checkProductExists($alias);

    /**
     * @param ProductStoreRequest $request
     * @return mixed
     */
    public function storeProduct(ProductStoreRequest $request);

    /**
     * @param ProductUpdateRequest $request
     * @param Product|null $product
     * @param int $id
     * @return mixed
     */
    public function updateProduct(ProductUpdateRequest $request, Product $product = null, int $id);

    /**
     * @param int $id
     * @return mixed
     */
    public function destroyUser(int $id);


}
