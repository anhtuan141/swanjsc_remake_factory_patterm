<?php

namespace App\Interfaces;

use App\Http\Requests\Api\User\ChangePassRequest;
use App\Http\Requests\Api\User\UserLoginRequest;
use App\Http\Requests\Api\User\UserProfileRequest;
use App\Http\Requests\Api\User\UserStoreRequest;
use App\Http\Requests\Api\User\UserUpdateRequest;
use App\Models\User;

interface UserRepositoryInterface
{
    /**
     * @param $queryParameter
     * @return mixed
     */
    public function getListUser($queryParameter);

    /**
     * @param int $id
     * @param $queryParameter
     * @return mixed
     */
    public function getByID(int $id, $queryParameter);

    /**
     * @param int $id
     * @return mixed
     */
    public function isAdmin(int $id);

    /**
     * @param $username
     * @return mixed
     */
    public function checkUserExists($username);

    /**
     * @param UserStoreRequest $request
     * @return mixed
     */
    public function storeUser(UserStoreRequest $request);

    /**
     * @param UserUpdateRequest $request
     * @param User|null $user
     * @param int $id
     * @return mixed
     */
    public function updateUser(UserUpdateRequest $request, User $user = null, int $id);

    /**
     * @param int $id
     * @return mixed
     */
    public function destroyUser(int $id);

    /**
     * @param UserLoginRequest $request
     * @param $remember
     * @return mixed
     */
    public function checkUserLogin(UserLoginRequest $request, $remember);

    /**
     * @param UserProfileRequest $request
     * @param User|null $user
     * @param int $id
     * @return mixed
     */
    public function updateUserProfile(UserProfileRequest $request, User $user = null, int $id);

    /**
     * @param ChangePassRequest $request
     * @param int $id
     * @return mixed
     */
    public function updateUserPassword(ChangePassRequest $request, int $id);
}
