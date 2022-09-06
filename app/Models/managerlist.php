<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class managerlist extends Model
{
    use HasFactory;
    protected $table='managerlists';
    protected $primaryKey='id';
    protected $fillable=[
                    'managerId',
                    'managerName',
                    'phone',
                    'userName',
                    'email',
                    'warehouseId',
    ];
    public function warehouse(){
        return $this->hasMany(warehouse::class);
    }
}
