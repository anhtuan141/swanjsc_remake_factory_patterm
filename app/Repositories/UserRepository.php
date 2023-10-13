<?php

namespace App\Repositories;

use App\Http\Requests\Api\User\ChangePassRequest;
use App\Http\Requests\Api\User\UserLoginRequest;
use App\Http\Requests\Api\User\UserProfileRequest;
use App\Http\Requests\Api\User\UserStoreRequest;
use App\Http\Requests\Api\User\UserUpdateRequest;
use App\Interfaces\UserRepositoryInterface;
use App\Models\User;

class UserRepository implements UserRepositoryInterface
{
    /**
     * @var User
     */
    private $user;

    /**
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @param $queryParameter
     * @return void
     */
    public function getListUser($queryParameter)
    {
        // TODO: Implement getListUser() method.
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
    public function isAdmin(int $id)
    {
        // TODO: Implement isAdmin() method.
    }

    /**
     * @param $username
     * @return void
     */
    public function checkUserExists($username)
    {
        // TODO: Implement checkUserExists() method.
    }

    /**
     * @param UserStoreRequest $request
     * @return void
     */
    public function storeUser(UserStoreRequest $request)
    {
        // TODO: Implement storeUser() method.
    }

    /**
     * @param UserUpdateRequest $request
     * @param User|null $user
     * @param int $id
     * @return void
     */
    public function updateUser(UserUpdateRequest $request, User $user = null, int $id)
    {
        // TODO: Implement updateUser() method.
    }

    /**
     * @param int $id
     * @return void
     */
    public function destroyUser(int $id)
    {
        // TODO: Implement destroyUser() method.
    }

    /**
     * @param UserLoginRequest $request
     * @param $remember
     * @return void
     */
    public function checkUserLogin(UserLoginRequest $request, $remember)
    {
        // TODO: Implement checkUserLogin() method.
    }

    /**
     * @param UserProfileRequest $request
     * @param User|null $user
     * @param int $id
     * @return void
     */
    public function updateUserProfile(UserProfileRequest $request, User $user = null, int $id)
    {
        // TODO: Implement updateUserProfile() method.
    }

    /**
     * @param ChangePassRequest $request
     * @param int $id
     * @return void
     */
    public function updateUserPassword(ChangePassRequest $request, int $id)
    {
        // TODO: Implement updateUserPassword() method.
    }

}
