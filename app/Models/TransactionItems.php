<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItems extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id', 'prodcuts_id', 'transactions_id'
    ];

    public function product(){
        return $this->hasOne(Product::class, 'id', 'products_id');
    }
}
