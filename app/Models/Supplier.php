<?php

namespace App\Models;

use App\Enums\Paginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'alias',
        'status'
    ];

    //Relationship
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    //Create more members for the model (Members are not in the database of the working model)


    //SQL
    public static function list($connection)
    {
        return self::where([
            ['status', '!=', $connection]
        ])
            ->orderBy('id', 'desc')
            ->paginate(Paginate::Paginate);
    }

    public static function checkSupp($alias)
    {
        return self::where('alias', '=', trim($alias))->exists();
    }

    public static function checkSuppUpdate($id, $alias)
    {
        return self::where([
            ['id', '!=', $id],
            ['alias', '=', $alias]
        ])->exists();
    }
}
