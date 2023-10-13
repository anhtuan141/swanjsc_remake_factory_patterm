<?php

namespace App\Factories;

use App\Interfaces\SupplierRepositoryFactoryInterface;
use App\Repositories\SupplierRepository;

class ConcreteSupplierRepositoryFactory implements SupplierRepositoryFactoryInterface
{
    /**
     * @return SupplierRepository
     */
    public function getListSupplierRepository()
    {
        return new SupplierRepository();
    }
}
