<?php

namespace Modules\Praca\Entities;

use Illuminate\Database\Eloquent\Model;

class Praca extends Model
{
    protected $table = 'praca';
    protected $primaryKey = 'praca_id';
    public $timestamps = true;

    protected $fillable = [
        'praca_id'    ,
        'nome',
        'tipo_membro',
        'nip',
        'cpf',
        'identidade',
        'data_nascimento',
        'tipo_sanguineo',
        'endereco',
        'complemento',
        'bairro',
        'cidade',
        'uf',
        'cep',
        'telefone',
        'celular_1',
        'celular_2',
        'email',
        'nome_guerra',
        'contato_nome',
        'contato_telefone',
        'contato_email',
        'conta_banco',
        'conta_agencia',
        'conta_corrente',
        'graduacao_id',
        'especialidade_id',
        'situacao_id',
        'forca_id',
        'reprovado',
        'img_foto',
        'img_documento',
        'img_inscricao',
        'observacao',
        'data_admissao',
        'data_demissao'
    ];

}
