<?php

namespace App\Messages\Product;

class ProductNotification
{
    public function exist($name)
    {
        return $message = [
            'msg' => 'Product ' . '"' . $name . '"' . ' Already Exist',
            'type' => 'danger'
        ];
    }

    public function nonExist($id)
    {
        return $message = [
            'msg' => 'Product ID: ' . $id . ' Non-Existent',
            'type' => 'danger',
        ];
    }

    public function createSuccess()
    {
        return $message = [
            'msg' => 'Created Product Successfully!',
            'type' => 'success'
        ];
    }

    public function createFail()
    {
        return $message = [
            'msg' => 'Created Product Fail!',
            'type' => 'danger'
        ];
    }

    public function updateSuccess($data, $connection)
    {
        return $message = [
            'msg' => $data . ' Product: ' . $connection . ' Successfully!',
            'type' => 'success'
        ];
    }

    public function updateFail($data, $connection)
    {
        return $message = [
            'msg' => $data . ' Product: ' . $connection . ' Fail!',
            'type' => 'danger'
        ];
    }
}
