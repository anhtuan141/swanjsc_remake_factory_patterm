<?php

namespace App\Messages\Supplier;

class SupplierNotification
{
    public function exist($name)
    {
        return $message = [
            'msg' => 'Supplier ' . '"' . $name . '"' . ' Already Exist',
            'type' => 'danger'
        ];
    }

    public function nonExist($id)
    {
        return $message = [
            'msg' => 'Supplier ID: ' . $id . ' Non-Existent',
            'type' => 'danger',
        ];
    }

    public function createSuccess()
    {
        return $message = [
            'msg' => 'Created Supplier Successfully!',
            'type' => 'success'
        ];
    }

    public function createFail()
    {
        return $message = [
            'msg' => 'Created Supplier Fail!',
            'type' => 'danger'
        ];
    }

    public function updateSuccess($data, $connection)
    {
        return $message = [
            'msg' => $data . ' Supplier: ' . $connection . ' Successfully!',
            'type' => 'success'
        ];
    }

    public function updateFail($data, $connection)
    {
        return $message = [
            'msg' => $data . ' Supplier: ' . $connection . ' Fail!',
            'type' => 'danger'
        ];
    }
}
