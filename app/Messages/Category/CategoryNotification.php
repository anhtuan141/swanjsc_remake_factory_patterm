<?php

namespace App\Messages\Category;

class CategoryNotification
{
    public function exist($name)
    {
        return $message = [
            'msg' => 'Category ' . '"' . $name . '"' . ' Already Exist!',
            'type' => 'danger'
        ];
    }

    public function nonExist($id)
    {
        return $message = [
            'msg' => 'Category ID: ' . $id . ' Non-Existent',
            'type' => 'danger',
        ];
    }

    public function createSuccess()
    {
        return $message = [
            'msg' => 'Created Category Successfully!',
            'type' => 'success'
        ];
    }

    public function createFail()
    {
        return $message = [
            'msg' => 'Created Category Fail!',
            'type' => 'danger'
        ];
    }

    public function updateSuccess($data, $connection)
    {
        return $message = [
            'msg' => $data . ' Category: ' . $connection . ' Successfully!',
            'type' => 'success'
        ];
    }

    public function updateFail($data, $connection)
    {
        return $message = [
            'msg' => $data . ' Category: ' . $connection . ' Fail!',
            'type' => 'danger'
        ];
    }

}
