<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class konsultasi extends Model
{
    use HasFactory;

    protected $table = "konsultasi";

    public function pasien(){
        return $this->belongsTo(related: Pasien::class, foreignKey: "pasien_id");
    }

    public function user(){
        return $this->belongsTo(related: User::class, foreignKey: "user_id");
    }
}
