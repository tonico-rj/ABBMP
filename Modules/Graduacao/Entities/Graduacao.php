<?php

namespace Modules\Graduacao\Entities;

use Illuminate\Database\Eloquent\Model;

class Graduacao extends Model
{
    protected $table = 'graduacao';
    protected $fillable = [
        'graduacao_id',
        'graduacao'
    ];
    protected $primaryKey = 'graduacao_id';
    public $timestamps = false;

}
