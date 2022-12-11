<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usulan extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    public function desa(){
        return $this->belongsTo(Desa::class,'Desa_id');
    }
}
