<?php

namespace App\Http\Controllers\Backend;

use App\DataTransferObjects\SupplierDto;
use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Supplier\SupplierStoreRequest;
use App\Http\Requests\Api\Supplier\SupplierUpdateRequest;
use App\Messages\Supplier\SupplierNotification;
use App\Services\Supplier\SupplierService;
use Illuminate\Support\Facades\Auth;
use App\Models\Supplier;

class SupplierController extends Controller
{
    protected SupplierService $service;
    protected SupplierNotification $notification;

    public function __construct(SupplierService $service, SupplierNotification $notification)
    {
        $this->service = $service;
        $this->notification = $notification;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        if (Auth::user()->group_id == UserRole::Administrator) {
            $admin = Supplier::list(0);
            return view('backend.supplier.list', ['collection' => $admin]);
        } else {
            $list = Supplier::list(-1);
            return view('backend.supplier.list', ['collection' => $list]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('backend.supplier.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(SupplierStoreRequest $request)
    {
        //Check Validate Data
        $validate = $request->validated();

        //Check Supplier Name Exist
        $supp = Supplier::checkSupp($request->alias);
        if ($supp) {
            return redirect()->route('suppliers.create')
                ->with(
                    $this->notification->exist($request->name)
                );
        }

        //Insert Database Suppliers
        $new = $this->service->store(
            SupplierDto::storeRequest($request)
        );
        if (!$new) {
            return redirect()->route('suppliers.index')
                ->with(
                    $this->notification->createFail()
                );
        }

        return redirect()->route('suppliers.index')
            ->with(
                $this->notification->createSuccess()
            );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function edit($id)
    {
        //Check Supplier Existing
        $supp = Supplier::find($id);
        if (!$supp) {
            return redirect()->route('suppliers.index')
                ->with(
                    $this->notification->nonExist($id)
                );
        } else {
            return view('backend.supplier.edit', [
                'supp' => $supp
            ]);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(SupplierUpdateRequest $request, $id)
    {
        //Check Validate Data
        $validate = $request->validated();

        //Check Supplier Existing
        $supplier = Supplier::find($id);
        if (!$supplier) {
            return redirect()->route('suppliers.edit', $id)
                ->with(
                    $this->notification->nonExist($id)
                );
        }
        //Check Category Name Exist
        $supp = Supplier::checkSuppUpdate($id, $request->alias);
        if ($supp) {
            return redirect()->route('suppliers.edit', $id)
                ->with(
                    $this->notification->exist($request->name)
                );
        }
        //Update Database
        $update = $this->service->update(
            $id, SupplierDto::updateRequest($request, $supplier)
        );
        if (!$update) {
            return redirect()->route('suppliers.edit', $id)
                ->with(
                    $this->notification->updateFail('Update', $supplier->name)
                );
        }

        return redirect()->route('suppliers.edit', $id)
            ->with(
                $this->notification->updateSuccess('Update', $supplier->name)
            );

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $delete = $this->service->delete($id);
        if (!$delete) {
            return redirect()->route('suppliers.index')
                ->with(
                    $this->notification->updateFail('Delete', $id)
                );
        }

        return redirect()->route('suppliers.index')
            ->with(
                $this->notification->updateSuccess('Delete', $id)
            );
    }
}
