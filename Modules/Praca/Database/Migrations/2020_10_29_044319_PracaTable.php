<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PracaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('praca', function (Blueprint $table) {
            $table->integerIncrements('praca_id');
            $table->string('nome', 100);
            $table->string('tipo_membro', 20);
            $table->integer('nip')->nullable();
            $table->integer('cpf')->nullable();
            $table->string('identidade', 50)->nullable();
            $table->dateTime('data_nascimento')->nullable();
            $table->string('tipo_sanguineo', 15)->nullable();
            $table->string('endereco', 100)->nullable();
            $table->string('complemento', 20)->nullable();
            $table->string('bairro', 50)->nullable();
            $table->string('cidade', 100)->nullable();
            $table->string('uf', 2)->nullable();
            $table->string('cep', 9)->nullable();
            $table->string('telefone', 50)->nullable();
            $table->string('celular_1', 50)->nullable();
            $table->string('celular_2', 50)->nullable();
            $table->string('email', 50)->nullable();
            $table->string('nome_guerra', 50)->nullable();
            $table->string('contato_nome', 100)->nullable();
            $table->string('contato_telefone', 50)->nullable();
            $table->string('contato_email', 50)->nullable();
            $table->string('conta_banco', 3)->nullable();
            $table->string('conta_agencia', 4)->nullable();
            $table->string('conta_corrente', 15)->nullable();

            $table->integer('graduacao_id');
            $table->integer('especialidade_id');
            $table->integer('situacao_id');
            $table->integer('forca_id');

            $table->string('reprovado', 1)->nullable();

            $table->string('img_foto', 100)->nullable();
            $table->string('img_documento', 100)->nullable();
            $table->string('img_inscricao', 100)->nullable();

            $table->text('observacao')->nullable();
            $table->dateTime('data_admissao')->nullable();
            $table->dateTime('data_demissao')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('praca');
    }
}
