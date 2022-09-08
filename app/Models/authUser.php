<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class authUser extends Model
{
    use HasFactory;
    protected $guard ='auth_users';
    protected $table='auth_users';
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
    protected $hidden = [
        'password',
        'remember_token',
    ];
    public function manager(){
        return $this->hasMany(managerlist::class);
    }
}
