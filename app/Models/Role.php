<?php

namespace App\Models;

use DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Role extends Model
{
    use HasFactory;

    public $table = 'roles';

    protected $dates = [
        'created_at',
        'updated_at',
    ];

    protected $fillable = [
        'title',
        'created_at',
        'updated_at',
    ];

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }

    public function permissions()
    {
        // mistake at joining relation
        return $this->belongsToMany(Permission::class,'permission_role');
    }
   
    // public function users()
    // {
    //     return $this->belongsToMany(User::class, 'role_user', 'role_id', 'user_id');
    // }

}
