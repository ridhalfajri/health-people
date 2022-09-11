<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LokasiVaksin extends Model
{
    use HasFactory;
    protected $table = 'lokasi_vaksin';
    protected $guarded = [];
    protected $primaryKey = 'id';

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }
}
