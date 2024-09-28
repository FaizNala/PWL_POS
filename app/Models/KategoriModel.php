<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class KategoriModel extends Model
{
    use HasFactory;

    protected $table ='m_kategori'; // Mendefinisikan nama tabel
    protected $primaryKey = 'kategori_id'; // Mendefinisikan primary key
    protected $fillable = ['kategori_kode','kategori_nama']; // Mendefinisikan kolom yang diizinkan diisi

    public function barang(): BelongsTo {
        return $this->belongsTo(BarangModel::class, 'kategori_id', 'kategori_id'); // Mendefinisikan foreign key
    }
}
