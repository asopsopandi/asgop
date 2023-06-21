<?php

namespace App\Models;
// use App\Models\Profil;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profil extends Model
{
    use HasFactory;
    protected $table = "profil";
    protected $guarded = [];
    protected $primaryKey = "nis";
}
