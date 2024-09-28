<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LevelModel extends Model
{
    use HasFactory;

    protected $table = 'm_level'; // Mendefinisikan nama tabel
    protected $primaryKey = 'level_id'; // Mendefinisikan primary key

    // Relasi ke UserModel (hasMany)
    // public function users(): HasMany {
    //     return $this->hasMany(UserModel::class, 'level_id', 'level_id');
    // }

    public function users(): BelongsTo {
        return $this->belongsTo(UserModel::class, 'level_id', 'level_id'); // Mendefinisikan foreign key
    }
}
