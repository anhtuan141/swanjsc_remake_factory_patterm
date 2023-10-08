<?php

namespace App\Http\Controllers\Backend;

use App\DataTransferObjects\ProductDto;
use App\Enums\UserRole;
use App\Http\Requests\Api\Product\ProductUpdateRequest;
use App\Messages\Product\ProductNotification;
use App\Services\Product\ProductService;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Product\ProductStoreRequest;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;

class ProductController extends Controller
{
    protected ProductService $service;
    protected ProductNotification $notification;

    public function __construct(ProductService $service, ProductNotification $notification)
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
            $admin = Product::list(0);
            return view('backend.product.list', ['collection' => $admin]);
        } else {
            $list = Product::list(-1);
            return view('backend.product.list', ['collection' => $list]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $cate = Category::list(-1);
        $supp = Supplier::list(-1);
        return view('backend.product.create', [
            'cate' => $cate,
            'supp' => $supp,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(ProductStoreRequest $request)
    {
        //Check Validate Data
        $validate = $request->validated();
        //Check Product Name Existing
        $prod = Product::checkProd($request->alias);
        if ($prod) {
            return redirect()->route('products.create')
                ->with(
                    $this->notification->exist($request->name_vi)
                );
        }

        //Insert Database Products
        $new = $this->service->store(
            ProductDto::storeRequest($request)
        );
        if (!$new) {
            return redirect()->route('products.index')
                ->with(
                    $this->notification->createFail()
                );
        }

        return redirect()->route('products.index')
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
        //Check Product Existing
        $prod = Product::find($id);
        if (!$prod) {
            return redirect()->route('products.index')
                ->with(
                    $this->notification->nonExist($id)
                );
        }

        $cate = Category::list(-1);
        $supp = Supplier::list(-1);
        return view('backend.product.edit', [
            'cate' => $cate,
            'prod' => $prod,
            'supp' => $supp,
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(ProductUpdateRequest $request, $id)
    {
        //Check Validate Data
        $validate = $request->validated();

        //Check Product Existing
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('products.edit', $id)
                ->with(
                    $this->notification->nonExist($id)
                );
        }
        //Check Product Name Exist
        $prod = Product::checkProdUpdate($id, $request->alias);
        if ($prod) {
            return redirect()->route('products.edit', $id)
                ->with(
                    $this->notification->exist($request->name_vi)
                );
        }
        //Update Database
        $update = $this->service->update(
            $id, ProductDto::updateRequest($request, $product)
        );
        if (!$update) {
            return redirect()->route('products.edit', $id)
                ->with(
                    $this->notification->updateFail('Update', $product->name_vi)
                );
        }

        return redirect()->route('products.edit', $id)
            ->with(
                $this->notification->updateSuccess('Update', $product->name_vi)
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
            return redirect()->route('products.index')
                ->with(
                    $this->notification->updateFail('Delete', $id)
                );
        }

        return redirect()->route('products.index')
            ->with(
                $this->notification->updateSuccess('Delete', $id)
            );
    }
}
