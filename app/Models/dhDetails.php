<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dhDetails extends Model
{
    use HasFactory;
    public $timestamps = true;
    protected $table='dh_details';
    protected $primaryKey='id';
    protected $fillable=[
                    'dh_name',
                    'registered_office',
                    'present_address',
                    'telephone',
                    'fax',
                    'email',
                    'website',
                    'logo'

    ];
}
