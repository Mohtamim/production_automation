<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class materialCategory extends Model
{
    use HasFactory;
    protected $table="material_categories";
    protected $primaryKey='id';
    public $timestamps = true;

    protected $fillable=[
        'materailName',
        'quantity',
        'unitPrice',
        'totalPrice'
    ];
}
