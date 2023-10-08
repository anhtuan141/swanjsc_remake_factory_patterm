<?php

namespace App\Models;

use App\Enums\Paginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name_vi',
        'name_en',
        'alias',
        'image',
        'image_2',
        'image_3',
        'supplier_id',
        'category_id',
        'farming_area',
        'product_size',
        'packing_standard',
        'summary',
        'status'
    ];

    //Relationship
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function shape()
    {
        return $this->belongsTo(Shape::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }

    //Create more members for the model (Members are not in the database of the working model)
    public function getCateNameAttribute()
    {
        return $this->category->name ?? 'NA';
    }

    public function getCateIdAttribute()
    {
        return $this->category->id ?? 'NA';
    }

    public function getBrandNameAttribute()
    {
        return $this->brand->name ?? 'NA';
    }

    public function getSuppNameAttribute()
    {
        return $this->supplier->name ?? 'NA';
    }

    public function getShapeNameAttribute()
    {
        return $this->shape->name ?? 'NA';
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

    public static function listForCategory($id)
    {
        return self::where([
            'status' => 1,
            'category_id' => $id
        ])
            ->paginate(Paginate::Paginate);
    }

    public static function detailByAlias($alias)
    {
        return self::where([
            'status' => 1,
            'alias' => $alias
        ])
            ->orderBy('name_vi', 'asc')
            ->first();
    }

    public static function checkProd($alias)
    {
        return self::where('alias', '=', $alias)->exists();
    }

    public static function checkProdUpdate($id, $alias)
    {
        return self::where([
            ['id', '!=', $id],
            ['alias', '=', $alias]
        ])->exists();
    }
}
