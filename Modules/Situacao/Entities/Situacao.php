<?php

namespace Modules\Situacao\Entities;

use Illuminate\Database\Eloquent\Model;

class Situacao extends Model
{
    protected $table = 'situacao';
    protected $fillable = [
        'situacao_id',
        'situacao'
    ];
    protected $primaryKey = 'situacao_id';
    public $timestamps = false;
}
