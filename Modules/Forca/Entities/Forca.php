<?php

namespace Modules\Forca\Entities;

use Illuminate\Database\Eloquent\Model;

class Forca extends Model
{
    protected $table = 'forca';
    protected $fillable = [
        'forca_id',
        'forca'
    ];
    protected $primaryKey = 'forca_id';
    public $timestamps = false;
}
