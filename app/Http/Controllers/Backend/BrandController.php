<?php

namespace App\Http\Controllers\Backend;

use App\DataTransferObjects\BrandDto;
use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Brand\BrandStoreRequest;
use App\Http\Requests\Api\Brand\BrandUpdateRequest;
use App\Messages\Brand\BrandNotification;
use App\Services\Brand\BrandService;
use Illuminate\Support\Facades\Auth;
use App\Models\Brand;

class BrandController extends Controller
{
    protected BrandService $service;
    protected BrandNotification $notification;

    public function __construct(BrandService $service, BrandNotification $notification)
    {
        $this->notification = $notification;
        $this->service = $service;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        if (Auth::user()->group_id == UserRole::Administrator) {
            $admin = Brand::list(0);
            return view('backend.brand.list', ['collection' => $admin]);
        } else {
            $list = Brand::list(-1);
            return view('backend.brand.list', ['collection' => $list]);
        }

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('backend.brand.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(BrandStoreRequest $request)
    {
        //Check Validate Data
        $validate = $request->validated();
        //Check Supplier Name Exist
        $supp = Brand::checkBrand($request->alias);
        if ($supp) {
            return redirect()->route('brands.create')
                ->with(
                    $this->notification->exist($request->name)
                );
        }
        //Insert Database Brands
        $new = $this->service->store(
            BrandDto::storeRequest($request)
        );
        if (!$new) {
            return redirect()->route('brands.index')
                ->with(
                    $this->notification->createFail()
                );
        }

        return redirect()->route('brands.index')
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
        $brand = Brand::find($id);
        if (!$brand) {
            return redirect()->route('brands.index')
                ->with(
                    $this->notification->nonExist($id)
                );
        }

        return view('backend.brand.edit', [
            'brand' => $brand
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(BrandUpdateRequest $request, $id)
    {
        //Check Validate Data
        $validate = $request->validated();
        //Check Brand Existing
        $brand = Brand::find($id);
        if (!$brand) {
            return redirect()->route('brands.edit', $id)
                ->with(
                    $this->notification->nonExist($id)
                );
        }
        //Check Category Name Exist
        $cate = Brand::checkBrandUpdate($id, $request->alias);
        if ($cate) {
            return redirect()->route('brands.edit', $id)
                ->with(
                    $this->notification->exist($request->name)
                );
        }
        //Update Database
        $update = $this->service->update(
            $id, BrandDto::updateRequest($request, $brand)
        );
        if (!$update) {
            return redirect()->route('brands.edit', $id)
                ->with(
                    $this->notification->updateFail('Brand', $brand->name)
                );
        }

        return redirect()->route('brands.edit', $id)
            ->with(
                $this->notification->updateSuccess('Brand', $brand->name)
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
            return redirect()->route('brands.index')
                ->with(
                    $this->notification->updateFail('Delete', $id)
                );
        }

        return redirect()->route('brands.index')
            ->with(
                $this->notification->updateSuccess('Delete', $id)
            );
    }
}
