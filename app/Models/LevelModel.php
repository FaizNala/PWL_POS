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
    protected $fillable = ['level_kode', 'level_nama'];

    public function users(): BelongsTo {
        return $this->belongsTo(UserModel::class, 'level_id', 'level_id'); // Mendefinisikan foreign key
    }
}
