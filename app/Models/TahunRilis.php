<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TahunRilis extends Model
{
    use HasFactory;
    public $fillable = ['tahun'];
    public $timestamps = true;

    public static function boot()
    {
        parent::boot();

        self::deleting(function($genre){
            // mengecek apakah genre masih punya movie
            if ($genre->movie->count() > 0){
                return false;
            }
        });
    }

    public function movie()
    {
        // model Tahun Rilis bisa memiliki banyak data
        // dari model Movie melalui fk id_tahun_rilis
        return $this->hasMany(Movie::class, 'id_tahun_rilis');
    }
}