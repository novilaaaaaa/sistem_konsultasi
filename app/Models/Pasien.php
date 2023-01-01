<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class pasien extends Model
{
    use HasFactory;

    protected $table = "pasien";

    public function class()
    {
        return $this->belongsTo(ClassRoom::class);
    }

    public function dokter(): BelongsToMany
{
    return $this->belongToMany(Dokter::class,'pasien_dokter','pasien_id','dokter_id');
}

}

