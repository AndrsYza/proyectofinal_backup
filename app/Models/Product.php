<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'name',
        'description',
        'status',
        'stock_quantity',
        'aquiered_at',

    ];
   
    protected $table = 'products';

    public function category(): BelongsTo 
    {
        return $this->belongsTo(category::class, 'category_id');
    }

}
