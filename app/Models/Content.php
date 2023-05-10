<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    use HasFactory;
    protected $table = "isilayanans";
    protected $fillable = ['judul','isi','gambar','id_layanan'];

    public function layanan()
    {
        return $this->belongsTo('App\Models\Layanan', 'id_layanan');
    }
}
