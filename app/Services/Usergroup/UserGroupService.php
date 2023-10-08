<?php

namespace App\Services\Usergroup;

use App\DataTransferObjects\UserGroupDto;
use App\Models\UserGroup;

class UserGroupService
{
    public function store(UserGroupDto $dto)
    {
        return UserGroup::create(
            [
                'name' => $dto->name,
                'alias' => $dto->alias,
                'status' => 1
            ]
        );
    }

    public function update($id, UserGroupDto $dto)
    {
        return UserGroup::find($id)->update(
            [
                'name' => $dto->name,
                'alias' => $dto->alias,
                'status' => $dto->status
            ]
        );
    }

    public function delete($id)
    {
        return UserGroup::where([
            'id' => $id,
            ['status', '!=', -1]
        ])
            ->update(['status' => -1]);
    }
}
