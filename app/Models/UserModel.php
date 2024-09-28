<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class UserModel extends Model
{
    use HasFactory;
    protected $table = 'm_user'; // Mendefinisikan nama tabel
    protected $primaryKey = 'user_id'; // Mendefinisikan primary key

    protected $fillable = ['level_id', 'username', 'nama', 'password'];

    // Relasi ke LevelModel (belongsTo)
    public function level(): BelongsTo {
        return $this->belongsTo(LevelModel::class, 'level_id', 'level_id');
    }
    public function Penjualan(): BelongsTo {
        return $this->belongsTo(PenjualanModel::class, 'user_id', 'user_id'); // Mendefinisikan foreign key
    }
}
