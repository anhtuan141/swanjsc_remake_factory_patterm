<?php

namespace App\Repositories;

use App\Http\Requests\Api\Supplier\SupplierStoreRequest;
use App\Http\Requests\Api\Supplier\SupplierUpdateRequest;
use App\Interfaces\SupplierRepositoryInterface;
use App\Models\Supplier;

class SupplierRepository implements SupplierRepositoryInterface
{
    /**
     * @var Supplier
     */
    private $supplier;

    /**
     * @param Supplier $supplier
     */
    public function __construct(Supplier $supplier)
    {
        $this->supplier = $supplier;
    }

    /**
     * @param $queryParameter
     * @return void
     */
    public function getListSupplier($queryParameter)
    {
        // TODO: Implement getListSupplier() method.
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
    public function checkSupplierExists($alias)
    {
        // TODO: Implement checkSupplierExists() method.
    }

    /**
     * @param SupplierStoreRequest $request
     * @return void
     */
    public function storeSupplier(SupplierStoreRequest $request)
    {
        // TODO: Implement storeSupplier() method.
    }

    /**
     * @param SupplierUpdateRequest $request
     * @param Supplier|null $supplier
     * @param int $id
     * @return void
     */
    public function updateSupplier(SupplierUpdateRequest $request, Supplier $supplier = null, int $id)
    {
        // TODO: Implement updateSupplier() method.
    }

    /**
     * @param int $id
     * @return void
     */
    public function destroySupplier(int $id)
    {
        // TODO: Implement destroySupplier() method.
    }
}
