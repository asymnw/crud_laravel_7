<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class categories extends Model
{
    protected $table = 'categories'; //smakan dgn nama tabel di heidi sql

    protected $primaryKey = 'categories_id'; //smakan dgn nama primary key di heidi sql
    protected $fillable = [ //smakan dgn nama field di heidi sql
        'categories_name',
        'description'
    ];
    public function products() //nama fuction bebas, tapi harus sama dgn nama function di model product
    {
        return $this->hasMany(Product::class, 'categories_id'); //(harus ada)untuk bereleasi di tabel categories dengan tabel product
    }
}
