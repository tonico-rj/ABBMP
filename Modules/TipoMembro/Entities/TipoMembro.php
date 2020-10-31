<?php

namespace Modules\TipoMembro\Entities;

use Illuminate\Database\Eloquent\Model;

class TipoMembro extends Model
{
    protected $table = 'tipo_membro';
    protected $fillable = [
        'tipo_membro_id',
        'tipo_membro'
    ];
    protected $primaryKey = 'tipo_membro_id';
    public $timestamps = false;

}
