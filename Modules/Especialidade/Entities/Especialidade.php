<?php

namespace Modules\Especialidade\Entities;

use Illuminate\Database\Eloquent\Model;

class Especialidade extends Model
{
    protected $table = 'especialidade';
    protected $fillable = [
        'especialidade_id',
        'especialidade'
    ];
    protected $primaryKey = 'especialidade_id';
    public $timestamps = false;
}
