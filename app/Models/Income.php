<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $table = 'income';
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $connection = 'sqlite';
    protected $attributes = [
        'delayed' => false,
    ];

}
