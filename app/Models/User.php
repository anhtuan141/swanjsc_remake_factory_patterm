<?php

namespace App\Models;

use App\Enums\Paginate;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'username',
        'image',
        'password',
        'email',
        'phone',
        'group_id',
        'status',
    ];


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    //Relationship
    public function roles()
    {
        return $this->hasMany(Role::class);
    }

    public function group()
    {
        return $this->belongsTo(UserGroup::class);
    }

    //Create more members for the model (Members are not in the database of the working model)
    public function getGrNameAttribute()
    {
        return $this->group->name ?? ' ';
    }

    public function getGrIdAttribute()
    {
        return $this->group->id ?? ' ';
    }

    //SQL
    public static function list($connection)
    {
        return self::where([
            ['status', '!=', $connection]
        ])
            ->paginate(Paginate::Paginate);
    }

    public static function checkUser($username)
    {
        return self::where('username', '=', $username)->exists();
    }
}
