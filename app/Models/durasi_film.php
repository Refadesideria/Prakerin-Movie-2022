<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class durasi_film extends Model
{
    use HasFactory;
    public $fillable = ['durasi_film'];
    public $timestamps = true;
    public $table = 'durasi_film';

    public function movie()
  {
    return $this->hasMany(Movie::class, 'id_durasi_film');
  }
}
