<?php

namespace App\Messages\Brand;

class BrandNotification
{
    public function exist($name)
    {
        return $message = [
            'msg' => 'Brand ' . '"' . $name . '"' . ' Already Exist!',
            'type' => 'danger'
        ];
    }

    public function nonExist($id)
    {
        return $message = [
            'msg' => 'Brand ID: ' . $id . ' Non-Existent',
            'type' => 'danger',
        ];
    }

    public function createSuccess()
    {
        return $message = [
            'msg' => 'Created Brand Successfully!',
            'type' => 'success'
        ];
    }

    public function createFail()
    {
        return $message = [
            'msg' => 'Created Brand Fail!',
            'type' => 'danger'
        ];
    }

    public function updateSuccess($data, $connection)
    {
        return $message = [
            'msg' => $data . ' Brand: ' . $connection . ' Successfully!',
            'type' => 'success'
        ];
    }

    public function updateFail($data, $connection)
    {
        return $message = [
            'msg' => $data . ' Brand: ' . $connection . ' Fail!',
            'type' => 'danger'
        ];
    }
}
