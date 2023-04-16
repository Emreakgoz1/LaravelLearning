<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //post modelim var ama hangi database ile ilişkendiriceksen onu tanımladık.
    protected $table = "post";
    protected $fillable = ["isim", "soyisim"]; //hangi colonlarla calısacaksam eloquent için onu modelde tanımlamam gerekiyor.
}
