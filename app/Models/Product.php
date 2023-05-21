<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    // caso queira mudar o nome padrão da tabela!
    protected $fillable = [
        'name',
        'price',
    ];
}
