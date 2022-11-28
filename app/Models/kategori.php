<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;

    protected $table = "kategori";

    public function pasien(){
        return $this->hasMany( related: Pasien::class, foreignKey: "user_id");
    }

    public function konsultasi(){
        return $this->belongsToMany(Konsultasi::class, "kategori_konsultasi", "kategori_id", "konsultasi_id");
    }
}
