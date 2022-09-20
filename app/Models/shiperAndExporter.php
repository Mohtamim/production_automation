<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class shiperAndExporter extends Model
{
    public $timestamps = true;

    use HasFactory;
    protected $table='shiper_and_exporters';
    protected $primaryKey='id';
    protected $fillable=[
        'name',
        'addressline1',
        'addressline2',
        'country',
        'phone',
        'email',
        'website',
        'sataus'
];
}
