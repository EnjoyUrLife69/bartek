<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kecamatan extends Model
{
    use HasFactory;

    protected $fillable = ['id, nama_kecamatan', 'id_kabupaten'];
    public $timestamps = true;

    public function kabupaten()
    {
        return $this->BelongsTo(Kabupaten::class, 'id_kabupaten');
    }

}
