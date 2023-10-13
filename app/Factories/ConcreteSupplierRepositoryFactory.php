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
     * @return \Illuminate\Http\Resources\Json\AnonymousResourceCollection
     */
    public function getListSupplierRepository()
    {
        $queryParameters = ['name' => 'Tuan'];
        $supplierList = $this->supplierRepository->getListSupplier($queryParameters);
        $supplierListResource = SupplierResource::collection($supplierList);

        return $supplierListResource;
    }
}
