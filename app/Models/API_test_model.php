<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class API_test_model extends Model
{
    use HasFactory;

    protected $table =  "api_test";
    public $timestamps = false;
    protected $fillable = ["name","email","username"];
}
