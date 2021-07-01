<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    // Table name
    protected $table = 'companys';

    // Disable timestamp columns
    public $timestamps = false;

    protected $fillable = [
        'logo','name','email'
    ];
}
