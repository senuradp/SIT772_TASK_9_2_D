<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerAddress extends Model
{
    use HasFactory;

    protected $table = 'customer_addresses';

    protected $fillable = [
        'CUSTOMER_ID',
        'STREET',
        'CITY',
        'POSTAL_CODE',
    ];

    public $timestamps = true;
}
