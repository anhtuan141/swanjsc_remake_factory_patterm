<?php

namespace App\Models;

use App\Enums\Paginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    use HasFactory;

    protected $table = 'brands';

    protected $fillable = [
        'name',
        'alias',
        'status',
    ];

    //Relationship
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    //SQL

    public static function list($connection)
    {
        return self::where([
            ['status', '!=', $connection]
        ])
            ->orderBy('id', 'desc')
            ->paginate(Paginate::Paginate);
    }

    public static function _create($name, $alias)
    {
        return self::insert(
            [
                'name' => trim($name),
                'alias' => trim($alias),
                'status' => 1
            ]
        );
    }

    public static function checkBrand($alias)
    {
        return self::where('alias', '=', $alias)->exists();
    }

    public static function checkBrandUpdate($id, $alias)
    {
        return self::where([
            ['id', '!=', $id],
            ['alias', '=', $alias]
        ])->exists();
    }

}
