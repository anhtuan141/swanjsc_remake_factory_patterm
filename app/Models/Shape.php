<?php

namespace App\Models;

use App\Enums\Paginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shape extends Model
{
    use HasFactory;

    //---------- Relationship ----------//
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    //---------- SQL ----------//
    public static function _listAdmin()
    {
        return self::all();
    }

    public static function _list()
    {
        return self::where('status', '!=', -1)
            ->paginate(Paginate::Paginate);
    }

    public static function _checkShape($alias)
    {
        return self::where('alias', '=', trim($alias))->exists();
    }

    public static function _delete($id)
    {
        return self::where('id', $id)
            ->where('status', '!=', -1)
            ->update(['status' => -1]);
    }
}
