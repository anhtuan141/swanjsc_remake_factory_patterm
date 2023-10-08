<?php

namespace App\Http\Controllers\Backend;

use App\Enums\UserRole;
use App\Http\Controllers\Controller;
use App\Messages\Role\RoleNotification;
use App\Models\Func;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    protected RoleNotification $notification;

    public function __construct(RoleNotification $notification)
    {
        $this->notification = $notification;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $list = User::list(-1);

        return view('backend.role.list', ['collection' => $list]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $funcs = $request->post('funcs', []);
        $user = User::find($request->user_id);
        $user_id = $request->user_id;
        //Check User Existing
        if (!$user_id) {
            return redirect()->route('roles.index');
        }
        //Check Admin
        if ($user->group_id == UserRole::Administrator) {
            return redirect()->route('roles.index')
                ->with(
                    $this->notification->notAdmin()
                );
        }
        //Recall Permission
        $recall = Role::_recallPermission($user_id);
        //Grand New Permission
        foreach ($funcs as $func) {
            $grand = Role::_grandPermission($user_id, $func);
        }

        return redirect()->route('roles.show', $user_id)
            ->with(
                $this->notification->success()
            );

    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function show($id)
    {
        //Check User Existing
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('roles.index')
                ->with(
                    $this->notification->nonExist($id)
                );
        }
        //Check Admin
        if ($user->group_id == UserRole::Administrator) {
            return redirect()->route('roles.index')
                ->with(
                    $this->notification->notAdmin()
                );
        }
        //Success
        $role = new Role();
        $parentlist = Func::_listfunction();
        return view('backend.role.role_list', [
            'user' => $user,
            'parentlist' => $parentlist,
            'role' => $role,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
