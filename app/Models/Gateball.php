<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gateball extends Model
{
    use HasFactory;
    protected $table="gateballs";
    protected $fillable= ['nama','umur','no_hp','jabatan'];
}
