<?php

namespace App\Http\Controllers\Backend;

use App\DataTransferObjects\UserDto;
use App\Http\Controllers\Controller;
use App\Http\Requests\Api\User\ChangePassRequest;
use App\Http\Requests\Api\User\ProfileRequest;
use App\Http\Requests\Api\User\UserLoginRequest;
use App\Http\Requests\Api\User\UserRequest;
use App\Http\Requests\Api\User\UserUpdateRequest;
use App\Messages\User\UserNotification;
use App\Models\User;
use App\Models\UserGroup;
use App\Services\User\UserService;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Enums\UserRole;

class UserController extends Controller
{
    protected UserService $service;
    protected UserNotification $notification;

    public function __construct(UserService $service, UserNotification $notification)
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
            $admin = User::list(0);
            return view('backend.user.list', ['collection' => $admin]);
        } else {
            $list = User::list(-1);
            return view('backend.user.list', ['collection' => $list]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        $userGroup = UserGroup::list(-1);
        return view('backend.user.create', ['userGroup' => $userGroup]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request)
    {
        //Check Validate Data
        $validated = $request->validated();
        //Check Username Existing
        $check = User::checkUser($request->username);
        if ($check) {
            return redirect()->route('users.create')
                ->with(
                    $this->notification->exist()
                );
        }
        //Insert Database Users
        $new = $this->service->store(
            UserDto::storeRequest($request)
        );
        if (!$new) {
            return redirect()->route('users.index')
                ->with(
                    $this->notification->createFail()
                );
        }

        return redirect()->route('users.index')
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
        //Check User Existing
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('users.index')
                ->with(
                    $this->notification->nonExist($id)
                );
        }
        //Check Admin
        if ($user->group_id == UserRole::Administrator) {
            return redirect()->route('users.index')
                ->with(
                    $this->notification->cant('Edit')
                );
        }

        $userGroup = UserGroup::list(-1);
        return view('backend.user.edit', ['user' => $user, 'userGroup' => $userGroup]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserUpdateRequest $request, $id)
    {
        //Check Validate Data
        $validate = $request->validated();
        //Check User Existing
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('users.index')
                ->with(
                    $this->notification->nonExist($id)
                );
        }
        //Check Admin
        if ($user->group_id === UserRole::Administrator) {
            return redirect()->route('users.edit', $id)
                ->with(
                    $this->notification->cant('Edit')
                );
        }
        //Update Database
        $update = $this->service->update(
            $id, UserDto::updateRequest($request, $user)
        );
        if (!$update) {
            return redirect()->route('users.edit', $id)
                ->with(
                    $this->notification->updateFail('Update', $user->name)
                );
        }

        return redirect()->route('users.edit', $id)
            ->with(
                $this->notification->updateSuccess('Update', $user->name)
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
        //Check User Existing
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('users.index')
                ->with(
                    $this->notification->nonExist()
                );
        }
        //Check Admin
        if ($user->group_id == UserRole::Administrator) {
            return redirect()->route('users.index')
                ->with(
                    $this->notification->cant('Delete')
                );
        }
        //User Is Logging
        if (Auth::user()->id == $id) {
            return redirect()->route('users.index')
                ->with(
                    $this->notification->updateFail('Delete', $id)
                );
        }
        //Delete
        $delete = $this->service->delete($id);
        if (!$delete) {
            return redirect()->route('users.index')
                ->with(
                    $this->notification->updateFail('Delete', $id)
                );
        }

        return redirect()->route('users.index')
            ->with(
                $this->notification->updateSuccess('Delete', $id)
            );
    }

    public function login()
    {
        //Check Login
        $check_login = Auth::check();
        if (!$check_login) {
            return view('backend.user.login');
        } else {
            return redirect()->route('b.home');
        }
    }

    public function loginPost(UserLoginRequest $request)
    {
        //Check Validate Data
        $validate = $request->validated();
        //Check Input Data
        $cre = ['username' => $request->username, 'password' => $request->password, 'status' => 1];
        $check = Auth::attempt($cre, $request->remember);
        if ($check) {
            return redirect()->route('b.home');
        } else {
            return redirect()->route('b.login')
                ->with(
                    $this->notification->incorrect()
                );
        }
    }

    public function logOut()
    {
        Auth::logout();
        return redirect()->route('b.login')
            ->with(
                $this->notification->logOut()
            );
    }

    public function profile()
    {
        $user = User::find(Auth::user()->id);
        //Check Admin
        if ($user->group_id == UserRole::Administrator) {
            return redirect()->route('b.home');
        }

        return view('backend.user.profile', ['user' => $user]);

    }

    public function profileUpdate(ProfileRequest $request)
    {
        //Check Validate Data
        $validate = $request->validated();

        $id = Auth::user()->id;
        $user = User::find($id);

        //Update Database
        $update = $this->service->profileUpdate(
            $id, UserDto::profileRequest($request, $user)
        );
        if (!$update) {
            return redirect()->route('b.profile', $id)
                ->with(
                    $this->notification->updateFail('Update', $user->name)
                );
        }

        return redirect()->route('b.profile', $id)
            ->with(
                $this->notification->updateSuccess('Update', $user->name)
            );

    }

    public function changePassword()
    {
        return view('backend.user.changepass');
    }

    public function changePasswordSave(ChangePassRequest $request)
    {
        //Check Validate Data
        $validate = $request->validated();

        $id = Auth::user()->id;
        $user = User::find($id);
        //Check Current Password
        $current = Hash::check($request->current_password, $user->password);
        if (!$current) {
            return redirect()->route('b.changepass', $id)
                ->with(
                    $this->notification->currentPasswordFail()
                );
        }
        //Check Current Password and New Password Same
        $same = strcmp($request->current_password, $request->password);
        if ($same == 0) {
            return redirect()->route('b.changepass', $id)
                ->with(
                    $this->notification->passwordSame()
                );
        }
        //Change Password
        $change = User::find($id)->update([
            'password' => Hash::make($request->password_confirmation)
        ]);
        //Logout
        Auth::logout();
        return redirect()->route('b.login')
            ->with(
                $this->notification->passwordChangeSuccess()
            );
    }
}
