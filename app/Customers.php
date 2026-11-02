<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{
    protected $table = 'customers'; //smakan dgn nama tabel di heidi sql
    protected $primaryKey = 'customer_id'; //smakan dgn nama primary key di heidi sql
    protected $fillable = [ //smakan dgn nama field di heidi sql
        'customer_name',
        'email',
        'phone',
        'address',
        'member_status'
    ];
    protected $casts = [
        'member_status' => 'boolean',
    ];
}
