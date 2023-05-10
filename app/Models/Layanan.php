<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    protected $fillable = ['nama_layanan'];
    protected $primaryKey = 'id_layanan';

    public function layanan()
    {
        return $this->hasOne('App\Models\Content', 'id_layanan');
    }

}
