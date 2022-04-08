<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

foreach (Income::all() as $income){
    echo $income->name;
}

class Income extends Model
{
    protected $fillable;



}
