<?php

namespace App\Messages\UserGroup;

class UserGroupNotification
{
    public function exist($name)
    {
        return $message = [
            'msg' => 'User-Group ' . '"' . $name . '"' . ' Already Exist',
            'type' => 'danger'
        ];
    }

    public function nonExist($id)
    {
        return $message = [
            'msg' => 'User-Group ID: ' . $id . ' Non-Existent',
            'type' => 'danger',
        ];
    }

    public function createSuccess()
    {
        return $message = [
            'msg' => 'Created User-Group Successfully!',
            'type' => 'success'
        ];
    }

    public function createFail()
    {
        return $message = [
            'msg' => 'Created User-Group Fail!',
            'type' => 'danger'
        ];
    }

    public function updateSuccess($data, $connection)
    {
        return $message = [
            'msg' => $data . ' User-Group: ' . $connection . ' Successfully!',
            'type' => 'success'
        ];
    }

    public function updateFail($data, $connection)
    {
        return $message = [
            'msg' => $data . ' User-Group: ' . $connection . ' Fail!',
            'type' => 'danger'
        ];
    }
}
