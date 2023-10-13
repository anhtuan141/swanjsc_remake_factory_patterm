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
        $query = $queryParameter;

        foreach ($queryParameter as $key => $value) {
            switch ($key) {
                case 'name':
                    $query->where('name', 'like', '%' . $value . '%');
                    break;

                case 'alias':
                    $query->where('alias', 'like', '%' . $value . '%');
                    break;

                case 'status':
                    $query->where('status', 'like', '%' . $value . '%');
                    break;

                case 'created_at':
                    $query->where('created_at', 'like', '%' . $value . '%');
                    break;

                case 'updated_at':
                    $query->where('updated_at', 'like', '%' . $value . '%');
                    break;
            }
        }

        $number = $queryParameters['number'] ?? 20;
        $number = min($number, 100);

        return $query->paginate($number);
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
