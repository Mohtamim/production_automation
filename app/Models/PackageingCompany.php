<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PackageingCompany extends Model
{
    use HasFactory;
    protected $table="packageing_companies";
    protected $primaryKey='id';
    public $timestamps = true;

    protected $fillable=[
        'companyName',
        'email',
        'contact',
        'address'
    ];
}
