<?php

namespace App\Interfaces;

use App\Http\Requests\Api\Usergroup\UserGroupStoreRequest;
use App\Http\Requests\Api\Usergroup\UserGroupUpdateRequest;
use App\Models\UserGroup;

interface UserGroupRepositoryInterface
{
    /**
     * @param $queryParameter
     * @return mixed
     */
    public function getListUserGroup($queryParameter);

    /**
     * @param int $id
     * @param $queryParameter
     * @return mixed
     */
    public function getByID(int $id, $queryParameter);

    /**
     * @param int $id
     * @return void
     */
    public function isUserGroupAdmin(int $id);

    /**
     * @param int $id
     * @param $alias
     * @return mixed
     */
    public function checkUserGroupExists(int $id, $alias);

    /**
     * @param UserGroupStoreRequest $request
     * @return mixed
     */
    public function storeUserGroup(UserGroupStoreRequest $request);

    /**
     * @param UserGroupUpdateRequest $request
     * @param UserGroup|null $userGroup
     * @param int $id
     * @return mixed
     */
    public function updateUserGroup(UserGroupUpdateRequest $request, UserGroup $userGroup = null, int $id);

    /**
     * @param int $id
     * @return mixed
     */
    public function destroyUserGroup(int $id);
}
