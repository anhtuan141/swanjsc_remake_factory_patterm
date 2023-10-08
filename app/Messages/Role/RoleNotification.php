<?php

namespace App\Messages\Role;

class RoleNotification
{
    public function notAdmin()
    {
        return $message = [
            'msg' => "User Admin Can't Permission",
            'type' => 'danger'
        ];
    }

    public function success()
    {
        return $message = [
            'msg' => 'Permissions Update Successful',
            'type' => 'success'
        ];
    }

    public function nonExist($id)
    {
        return $message = [
            'msg' => 'User ID: ' . $id . ' Non-Existent',
            'type' => 'danger'
        ];
    }

}
