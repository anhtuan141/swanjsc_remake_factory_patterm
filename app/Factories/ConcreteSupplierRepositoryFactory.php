<?php

namespace App\Factories;

use App\Http\Resources\SupplierResource;
use App\Interfaces\SupplierRepositoryFactoryInterface;
use App\Interfaces\SupplierRepositoryInterface;
use App\Repositories\SupplierRepository;

class ConcreteSupplierRepositoryFactory implements SupplierRepositoryFactoryInterface
{
    /**
     * @var SupplierRepositoryInterface
     */
    private $supplierRepository;

    /**
     * @param SupplierRepositoryInterface $supplierRepository
     */
    public function __construct(SupplierRepositoryInterface $supplierRepository)
    {
        $this->supplierRepository = $supplierRepository;
    }

    /**
     * @param $queryParameter
     * @return mixed
     */
    public function getListSupplierRepository($queryParameter)
    {
        return $this->supplierRepository->getSupplierList($queryParameter);
    }
}
