<?php

namespace App\DataTransferObjects;

use App\Http\Requests\Api\User\ProfileRequest;
use App\Http\Requests\Api\User\UserRequest;
use App\Http\Requests\Api\User\UserUpdateRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserDto
{
    public $name, $username, $image, $password, $email, $phone, $group_id, $status;

    public function __construct(
        $name,
        $username,
        $image,
        $password,
        $email,
        $phone,
        $group_id,
        $status
    )
    {
        $this->name = $name;
        $this->username = $username;
        $this->image = $image;
        $this->password = $password;
        $this->email = $email;
        $this->phone = $phone;
        $this->group_id = $group_id;
        $this->status = $status;
    }

    public static function storeRequest(UserRequest $request)
    {
        return new self(
            $request->name,
            $request->username,
            $request->image,
            Hash::make($request->password),
            $request->email,
            $request->phone,
            $request->group_id,
            $request->status
        );
    }

    public static function updateRequest(UserUpdateRequest $request, User $user)
    {
        return new self(
            $request->name ?: $user->name,
            $request->username ?: $user->username ,
            $request->image ?: $user->image,
            $request->password ?: $user->password,
            $request->email ?: $user->email,
            $request->phone ?: $user->phone,
            $request->group_id ?: $user->group_id,
            $request->status ?: $user->status
        );
    }

    public static function profileRequest(ProfileRequest $request, User $user)
    {
        return new self(
            $request->name ?: $user->name,
            $request->username ?: $user->username ,
            $request->image ?: $user->image,
            $request->password ?: $user->password,
            $request->email ?: $user->email,
            $request->phone ?: $user->phone,
            $request->group_id ?: $user->group_id,
            $request->status ?: $user->status
        );
    }
}
