<?php

namespace App\Repositories;

use App\Http\Requests\Api\Usergroup\UserGroupStoreRequest;
use App\Http\Requests\Api\Usergroup\UserGroupUpdateRequest;
use App\Interfaces\UserGroupRepositoryInterface;
use App\Models\UserGroup;

class UserGroupRepository implements UserGroupRepositoryInterface
{
    /**
     * @var UserGroup
     */
    private $userGroup;

    /**
     * @param UserGroup $userGroup
     */
    public function __construct(UserGroup $userGroup)
    {
        $this->userGroup = $userGroup;
    }

    /**
     * @param $queryParameter
     * @return void
     */
    public function getListUserGroup($queryParameter)
    {
        // TODO: Implement getListUserGroup() method.
    }

    /**
     * @param int $id
     * @param $queryParameter
     * @return void
     */
    public function getByID(int $id, $queryParameter)
    {
        // TODO: Implement getByID() method.
    }

    /**
     * @param int $id
     * @return void
     */
    public function isUserGroupAdmin(int $id)
    {
        // TODO: Implement isUserGroupAdmin() method.
    }

    /**
     * @param int $id
     * @param $alias
     * @return void
     */
    public function checkUserGroupExists(int $id, $alias)
    {
        // TODO: Implement checkUserGroupExists() method.
    }

    /**
     * @param UserGroupStoreRequest $request
     * @return void
     */
    public function storeUserGroup(UserGroupStoreRequest $request)
    {
        // TODO: Implement storeUserGroup() method.
    }

    /**
     * @param UserGroupUpdateRequest $request
     * @param UserGroup|null $userGroup
     * @param int $id
     * @return void
     */
    public function updateUserGroup(UserGroupUpdateRequest $request, UserGroup $userGroup = null, int $id)
    {
        // TODO: Implement updateUserGroup() method.
    }

    /**
     * @param int $id
     * @return void
     */
    public function destroyUserGroup(int $id)
    {
        // TODO: Implement destroyUserGroup() method.
    }
}
