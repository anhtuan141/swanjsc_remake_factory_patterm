<?php

namespace App\DataTransferObjects;

use App\Http\Requests\Api\Usergroup\UserGroupStoreRequest;
use App\Http\Requests\Api\Usergroup\UserGroupUpdateRequest;
use App\Models\UserGroup;

class UserGroupDto
{
    public $name, $alias, $status;

    public function __construct($name, $alias, $status)
    {
        $this->name = $name;
        $this->alias = $alias;
        $this->status = $status;
    }

    public static function storeRequest(UserGroupStoreRequest $request)
    {
        return new self(
            $request->name,
            $request->alias,
            $request->status
        );
    }

    public static function updateRequest(UserGroupUpdateRequest $request, UserGroup $userGroup)
    {
        return new self(
            $request->name ?: $userGroup->name,
            $request->alias ?: $userGroup->alias,
            $request->status ?: $userGroup->status
        );
    }
}
