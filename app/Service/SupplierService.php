<?php

namespace App\Service;

use App\Interfaces\SupplierRepositoryInterface;

class SupplierService
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

    public function getSupplierList($queryParameter)
    {
        return $this->supplierRepository->getSupplierList($queryParameter);
    }

}
