<?php

namespace App\Http\Controllers\Backend;

use App\DataTransferObjects\UserGroupDto;
use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\Usergroup\UserGroupStoreRequest;
use App\Http\Requests\Api\Usergroup\UserGroupUpdateRequest;
use App\Messages\UserGroup\UserGroupNotification;
use App\Models\UserGroup;
use App\Services\Usergroup\UserGroupService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserGroupController extends Controller
{
    protected UserGroupService $service;
    protected UserGroupNotification $notification;

    public function __construct(UserGroupService $service, UserGroupNotification $notification)
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
            $admin = UserGroup::list(0);
            return view('backend.usergroup.list', ['collection' => $admin]);
        } else {
            $list = UserGroup::list(-1);
            return view('backend.usergroup.list', ['collection' => $list]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('backend.usergroup.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserGroupStoreRequest $request)
    {
        //Check Validate Data
        $validated = $request->validated();
        //Check UserGroup Name Existing
        $userGroup = UserGroup::checkGroup($request->alias);
        if ($userGroup) {
            return redirect()->route('usergroups.create')
                ->with(
                    $this->notification->exist($request->name)
                );
        }
        //Insert Database User-Groups
        $new = $this->service->store(
            UserGroupDto::storeRequest($request)
        );
        if (!$new) {
            return redirect()->route('usergroups.index')
                ->with(
                    $this->notification->createFail()
                );
        }
        return redirect()->route('usergroups.index')
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
        $userGroup = UserGroup::find($id);
        if (!$userGroup) {
            return redirect()->route('usergroups.index')
                ->with(
                    $this->notification->nonExist($id)
                );
        }

        return view('backend.usergroup.edit', ['userGroup' => $userGroup]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserGroupUpdateRequest $request, $id)
    {
        //Check Validate Data
        $validate = $request->validated();
        //Check Product Existing
        $userGroup = UserGroup::find($id);
        if (!$userGroup) {
            return redirect()->route('usergroups.edit', $id)
                ->with(
                    $this->notification->nonExist($id)
                );
        }
        //Check Product Name Exist
        $group = UserGroup::checkGroupUpdate($id, $request->alias);
        if ($group) {
            return redirect()->route('usergroups.edit', $id)
                ->with(
                    $this->notification->exist($request->name)
                );
        }
        //Update Database
        $update = $this->service->update(
            $id, UserGroupDto::updateRequest($request, $userGroup)
        );
        if (!$update) {
            return redirect()->route('usergroups.edit', $id)
                ->with(
                    $this->notification->updateFail('Update', $userGroup->name)
                );
        }

        return redirect()->route('usergroups.edit', $id)
            ->with(
                $this->notification->updateSuccess('Update', $userGroup->name)
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
            return redirect()->route('usergroups.index')
                ->with(
                    $this->notification->updateFail('Delete', $id)
                );
        }

        return redirect()->route('usergroups.index')
            ->with(
                $this->notification->updateSuccess('Delete', $id)
            );
    }
}
