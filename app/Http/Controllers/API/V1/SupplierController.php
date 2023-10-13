<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Interfaces\SupplierRepositoryFactoryInterface;
use App\Service\SupplierService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class SupplierController extends Controller
{ /**
 * @var SupplierRepositoryFactoryInterface
 */
    private $supplierRepositoryFactory;

    /**
     * @var SupplierService
     */
    private SupplierService $supplierService;

    /**
     * @param SupplierRepositoryFactoryInterface $supplierRepositoryFactory
     * @param SupplierService $supplierService
     */
    public function __construct(
        SupplierRepositoryFactoryInterface $supplierRepositoryFactory,
        SupplierService                    $supplierService
    )
    {
        $this->supplierRepositoryFactory = $supplierRepositoryFactory;
        $this->supplierService = $supplierService;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function index()
    {
        $queryParameter = [];
        $supplierList = $this->supplierService->getSupplierList($queryParameter);

        return response()->json([
            'data' => $supplierList
        ], Response::HTTP_OK);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
