<?php

namespace App\Models;

use App\Enums\Paginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserGroup extends Model
{
    protected $table = 'user_groups';
    protected $fillable = [
        'name',
        'alias',
        'summary',
        'status'
    ];
    use HasFactory;

    //Relationship
    public function users()
    {
        return $this->hasMany(User::class);
    }

    //SQL
    public static function list($connection)
    {
        return self::where([
            ['status', '!=', $connection]
        ])
            ->paginate(Paginate::Paginate);
    }

    public static function checkGroup($alias)
    {
        return self::where('alias', '=', $alias)->exists();
    }

    public static function checkGroupUpdate($id, $alias)
    {
        return self::where([
            ['id', '!=', $id],
            ['alias', '=', $alias]
        ])->exists();
    }
}
