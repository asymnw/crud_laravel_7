<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\categories;

class Product extends Model
{
    protected $table = 'product'; //smakan dgn nama tabel di heidi sql
    protected $primaryKey = 'product_id'; //smakan dgn nama primary key di heidi sql
    protected $fillable = [
        'categories_id',
        'name',
        'description',
        'price',
        'stock',
        'image',
        'status'
    ];

    public function categories() //nama fuction bebas, tapi harus sama dgn nama function di model categories
    {
        return $this->belongsTo(categories::class, 'categories_id'); //(harus ada)untuk bereleasi di tabel product dengan tabel categories
    }
}
