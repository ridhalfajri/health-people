<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $table = 'dokter';
    protected $primaryKey = 'id';

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class);
    }
}
