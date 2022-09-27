<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pono extends Model
{
    use HasFactory;
    protected $table='ponos';
    protected $primaryKey='id';
    public $timestamps = true;
    protected $guarded=['id'];

    public function mainorder(){
        return $this->hasMany(mainOrder::class);
    }

}
