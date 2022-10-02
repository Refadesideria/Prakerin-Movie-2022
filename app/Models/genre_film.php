<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Alert;

class genre_film extends Model
{
    use HasFactory;
    public $fillable = ['kategori'];
    public $timestamps = true;
    public $table = 'genre_film';

    public static function boot()
    {
        parent::boot();

        self::deleting(function($genre){
            // mengecek apakah genre masih punya movie
            if ($genre->movie->count() > 0){
                Alert::error('Gagal Menghapus', 'Nama Genre : ' .$genre->kategori);
                return false;
            }
            Alert::success('Done', 'Data berhasil diedit');
    
        });
    }

    public function movie()
    {
        // model genre_film memiliki banyak data
        // dari model Movie melalui fk id_genre
        return $this->hasMany(Movie::class, 'id_genre');
    }
}