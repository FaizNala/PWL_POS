<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable; // implementas class Authenticatable

class UserModel extends Authenticatable
{
    use HasFactory;
    protected $table = 'm_user'; // Mendefinisikan nama tabel
    protected $primaryKey = 'user_id'; // Mendefinisikan primary key
    protected $fillable = ['level_id', 'username', 'nama', 'password'];

    protected $hidden = ['password'];

    protected $casts = ['password' => 'hashed'];

    // Relasi ke LevelModel (belongsTo)
    public function level(): BelongsTo
    {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
}
