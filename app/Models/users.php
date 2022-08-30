<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users extends Model
{
    use HasFactory;
    protected $table='authusers';
    protected $primaryKey='id';
    protected $fillable=[
        'userId',
        'firstName',
        'lastName',
         'userName',
         'email',
         'phone',
         'password',
         'userType',

    ];
    public function manager(){
        return $this->hasMany(managerlist::class);
    }
}
