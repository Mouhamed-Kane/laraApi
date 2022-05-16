<?php

namespace App\Models;

use App\Models\Annonce;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Commentaire extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function annonce()
    {
        return $this->belongsTo(Annonce::class);
    }
}
