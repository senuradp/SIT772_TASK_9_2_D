<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerContact extends Model
{
    use HasFactory;

    protected $table = 'customer_contacts';

    protected $fillable = [
        'CUSTOMER_ID',
        'EMAIL',
        'PHONE',
    ];

    public $timestamps = true;
}
