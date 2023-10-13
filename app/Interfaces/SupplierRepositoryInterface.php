<?php

namespace App\Interfaces;

use App\Http\Requests\Api\Supplier\SupplierStoreRequest;
use App\Http\Requests\Api\Supplier\SupplierUpdateRequest;
use App\Models\Supplier;

interface SupplierRepositoryInterface
{
    /**
     * @param $queryParameter
     * @return mixed
     */
    public function getSupplierList($queryParameter);

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
    public function checkSupplierExists($alias);

    /**
     * @param SupplierStoreRequest $request
     * @return mixed
     */
    public function storeSupplier(SupplierStoreRequest $request);

    /**
     * @param SupplierUpdateRequest $request
     * @param Supplier|null $supplier
     * @param int $id
     * @return mixed
     */
    public function updateSupplier(SupplierUpdateRequest $request, Supplier $supplier = null, int $id);

    /**
     * @param int $id
     * @return mixed
     */
    public function destroySupplier(int $id);

}
