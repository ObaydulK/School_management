<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class studentprotal extends Model
{
    //
    use HasFactory;
    protected $fillable = [
        "name","roll","class","section", "address",
    ];
}
