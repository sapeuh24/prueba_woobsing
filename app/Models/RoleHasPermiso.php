<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RoleHasPermiso extends Model
{
    use HasFactory;

    protected $table = 'role_has_permisos';

    protected $fillable = [
        'role_id',
        'permiso_id',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function permiso()
    {
        return $this->belongsTo(Permiso::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}