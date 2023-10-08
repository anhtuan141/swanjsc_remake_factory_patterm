<?php

namespace App\Messages\User;

class UserNotification
{
    public function createSuccess()
    {
        return $message = [
            'msg' => 'Created User Successfully!',
            'type' => 'success'
        ];
    }

    public function createFail()
    {
        return $message = [
            'msg' => 'Create User Fail!',
            'type' => 'danger'
        ];
    }

    public function exist()
    {
        return $message = [
            'msg' => 'Username Already Exist',
            'type' => 'danger'
        ];
    }

    public function nonExist($id)
    {
        return $message = [
            'msg' => 'User ID: ' . $id . ' Non-Existent',
            'type' => 'danger',
        ];
    }

    public function updateSuccess($data, $connection)
    {
        return $message = [
            'type' => 'success',
            'msg' => $data . ' User: ' . $connection . ' Successfully!'
        ];
    }

    public function updateFail($data, $connection)
    {
        return $message = [
            'type' => 'danger',
            'msg' => $data . ' User: ' . $connection . ' Fail!'
        ];
    }

    public function cant($data)
    {
        return $message = [
            'msg' => "User ADMIN Can't " . $data,
            'type' => 'danger'
        ];
    }

    public function incorrect()
    {
        return $message = [
            'msg' => 'Incorrect Username or Password',
            'type' => 'danger'
        ];
    }

    public function logOut()
    {
        return $message = [
            'msg' => 'You Have Logout This System',
            'type' => 'warning'
        ];
    }

    public function currentPasswordFail()
    {
        return $message = [
            'msg' => 'Current Password is Invalid',
            'type' => 'danger'
        ];
    }

    public function passwordSame()
    {
        return $message = [
            'msg' => 'New Password Cannot Be Same As Your Current Password',
            'type' => 'danger'
        ];
    }

    public function passwordChangeSuccess()
    {
        return $message = [
            'msg' => 'Your Password Have Changed Sucessfully',
            'type' => 'success'
        ];
    }

}
