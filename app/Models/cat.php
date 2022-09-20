<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cat extends Model
{

    use HasFactory;
    public $timestamps = true;

    protected $table='cats';
    protected $primaryKey='id';
    protected $fillable=[
                    'catName',
                    'catTitle'
    ];
    public function pruduct()
    {
        return $this->belongsTo(pruduct::class);
    }
}
