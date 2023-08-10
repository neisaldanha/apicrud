<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public $timestamps = FALSE;
    public $primaryKey = 'id';
    public $fillable = ['id','nome','telefone','email'];
    use HasFactory;
}
