<?php

namespace App\Services\User;

use App\DataTransferObjects\UserDto;
use App\Models\User;

class UserService
{
    public function store(UserDto $dto)
    {
        return User::create(
            [
                'name' => $dto->name,
                'username' => $dto->username,
                'image' => $dto->image,
                'password' => $dto->password,
                'email' => $dto->email,
                'phone' => $dto->phone,
                'group_id' => $dto->group_id,
                'status' => 1
            ]
        );
    }

    public function update($id, UserDto $dto)
    {
        return User::find($id)->update(
            [
                'name' => $dto->name,
                'image' => $dto->image,
                'phone' => $dto->phone,
                'group_id' => $dto->group_id,
                'status' => $dto->status
            ]
        );
    }

    public function profileUpdate($id, UserDto $dto)
    {
        return User::find($id)->update(
            [
                'name' => $dto->name,
                'image' => $dto->image,
                'phone' => $dto->phone
            ]
        );
    }

    public function delete($id)
    {
        return User::where([
            'id' => $id,
            ['status', '!=', -1]
        ])
            ->update(['status' => -1]);
    }
}
