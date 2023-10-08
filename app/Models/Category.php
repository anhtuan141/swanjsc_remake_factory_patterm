<?php

namespace App\Models;

use App\Enums\Paginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'parent_id',
        'name',
        'alias',
        'image',
        'summary',
        'status'
    ];

    // Relationship
    public function products()
    {
        return $this->hasMany(Product::class);
    }

    //Recursion Category
    public function children()
    {
        return $this->hasMany(Category::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Category::class, 'parent_id', 'id');
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

    public static function listByAlias($alias)
    {
        return self::where([
            'status' => 1,
            'alias' => $alias
        ])
            ->where('id', '!=', 1)
            ->first();
    }

    public static function listCategory()
    {
        return self::where('status', 1)
            ->where('id', '!=', 1)
            ->get();
    }

    public static function listCategoryChild()
    {
        return self::where([
            'status' => 1,
            'parent_id' => 2
        ])
            ->get();
    }

    public static function checkCate($alias)
    {
        return self::where('alias', '=', $alias)->exists();
    }

    public static function checkCateUpdate($id, $alias)
    {
        return self::where([
            ['id', '!=', $id],
            ['alias', '=', $alias]
        ])->exists();
    }
}
