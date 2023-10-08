<?php

namespace App\Http\Controllers\Backend;

use App\DataTransferObjects\CategoryDto;
use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Category\CategoryStoreRequest;
use App\Http\Requests\Api\Category\CategoryUpdateRequest;
use App\Messages\Category\CategoryNotification;
use App\Services\Category\CategoryService;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class CategoryController extends Controller
{
    protected CategoryService $service;
    protected CategoryNotification $notification;

    public function __construct(CategoryService $service, CategoryNotification $notification)
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
            $admin = Category::list(0);
            return view('backend.category.list', ['collection' => $admin]);
        } else {
            $list = Category::list(-1);
            return view('backend.category.list', ['collection' => $list]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(CategoryStoreRequest $request)
    {
        //Check Validate Data
        $validate = $request->validated();
        //Check Category Name Exist
        $cate = Category::checkCate($request->alias);
        if ($cate) {
            return redirect()->route('categories.create')
                ->with(
                    $this->notification->exist($request->name)
                );
        }
        //Insert Database Categories
        $new = $this->service->store(
            CategoryDto::storeRequest($request)
        );
        if (!$new) {
            return redirect()->route('categories.index')
                ->with(
                    $this->notification->createFail()
                );
        }

        return redirect()->route('categories.index')
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
        //Check Category Existing
        $cate = Category::find($id);
        if (!$cate) {
            return redirect()->route('categories.index')
                ->with(
                    $this->notification->nonExist($id)
                );
        }

        return view('backend.category.edit', [
            'cate' => $cate
        ]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(CategoryUpdateRequest $request, $id)
    {
        //Check Validate Data
        $validate = $request->validated();

        //Check Category Existing
        $category = Category::find($id);
        if (!$category) {
            return redirect()->route('categories.edit', $id)
                ->with(
                    $this->notification->nonExist($id)
                );
        }
        //Check Category Name Exist
        $cate = Category::checkCateUpdate($id, $request->alias);
        if ($cate) {
            return redirect()->route('categories.edit', $id)
                ->with(
                    $this->notification->exist($request->name)
                );
        }
        //Update Database
        $update = $this->service->update(
            $id, CategoryDto::updateRequest($request, $category)
        );
        if (!$update) {
            return redirect()->route('categories.edit', $id)
                ->with(
                    $this->notification->updateFail('Update', $category->name)
                );
        }

        return redirect()->route('categories.edit', $id)
            ->with(
                $this->notification->updateSuccess('Update', $category->name)
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
            return redirect()->route('categories.index')
                ->with(
                    $this->notification->updateFail('Delete', $id)
                );
        }

        return redirect()->route('categories.index')
            ->with(
                $this->notification->updateSuccess('Delete', $id)
            );
    }
}
