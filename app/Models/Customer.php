<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';

    protected $fillable = [
        'CUSTOMER_ID',
        'FIRST_NAME',
        'LAST_NAME',
    ];

    public $timestamps = true;
}
