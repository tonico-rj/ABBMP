    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-9">
                    <div class="row">
                        <div class="form-group col-sm-10">
                            {!! Form::label('nome', trans('mensagens.nome')) !!}
                            {!! Form::text('nome', null, ['class'=>'form-control input-sm', 'id'=>'nome'] ) !!}
                        </div>

                        <div class="form-group col-sm-2">
                            {!! Form::label('praca_id', trans('mensagens.inscricao')) !!}
                            {!! Form::text('praca_id', null, ['class'=>'form-control input-sm', 'readonly'=>'true'] ) !!}
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-sm-4">
                            {!! Form::label('nip', trans('mensagens.nip')) !!}
                            {!! Form::text('nip', null, ['class'=>'form-control input-sm', 'id'=>'nip'] ) !!}
                        </div>
                        <div class="form-group col-sm-4">
                            {!! Form::label('cpf', trans('mensagens.cpf')) !!}
                            {!! Form::text('cpf', null, ['class'=>'form-control input-sm', 'maxlength' =>'11', 'id'=>'cpf'] ) !!}
                        </div>
                        <div class="form-group col-sm-4">
                            {!! Form::label('identidade', trans('mensagens.identidade')) !!}
                            {!! Form::text('identidade', null, ['class'=>'form-control input-sm', 'maxlength' =>'50', 'id'=>'identidade'] ) !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-4">
                            {!! Form::label('data_nascimento', trans('mensagens.data_nascimento')) !!}
                            {!! Form::date('data_nascimento', null, ['class'=>'form-control input-sm', 'id'=>'data_nascimento'] ) !!}
                        </div>
                        <div class="form-group col-sm-4">
                            {!! Form::label('data_admissao', trans('mensagens.data_admissao')) !!}
                            {!! Form::date('data_admissao', null, ['class'=>'form-control input-sm', 'id'=>'data_admissao'] ) !!}
                        </div>
                        <div class="form-group col-sm-4">
                            {!! Form::label('data_demissao', trans('mensagens.data_demissao')) !!}
                            {!! Form::date('data_demissao', null, ['class'=>'form-control input-sm', 'id'=>'data_demissao'] ) !!}
                        </div>
                    </div>

                    <div class="row">
                        <div class="form-group col-sm-4">
                            {!! Form::label('nome_guerra', trans('mensagens.nome_guerra')) !!}
                            {!! Form::text('nome_guerra', null, ['class'=>'form-control input-sm', 'maxlength' =>'50', 'id'=>'nome_guerra'] ) !!}
                        </div>
                        <div class="form-group col-sm-4">
                            {!! Form::label('tipo_membro', trans('mensagens.tipo_membro')) !!}
                            {!! Form::select('tipo_membro', $tipomembro, null, ['class'=>'form-control input-sm', 'id'=>'tipo_membro'] ) !!}
                        </div>
                        <div class="form-group col-sm-4">
                            {!! Form::label('tipo_sanguineo', trans('mensagens.tipo_sanguineo')) !!}
                            {!! Form::text('tipo_sanguineo', null, ['class'=>'form-control input-sm', 'maxlength' =>'15', 'id'=>'tipo_sanguineo'] ) !!}
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <div class="row">
                        <div class="col-lg-12 col-sm-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Foto</div>
                                <div class="panel-body">
                                    <center>
                                        {!! Html::image($foto, '', array('class' => 'image','id'=>'blah', 'width'=>'120', 'height' => '120')) !!}
                                        <br>
                                        <label class="btn btn-primary" for="imgfoto">
                                            <input type='file' id="imgfoto" name="imgfoto" style='display:none;'/>
                                            {{ trans('mensagens.selecione_imagem') }}
                                        </label>
                                        <!--<input type='file' id="imgFoto" style='display:none;'/>-->
                                        <!--<input id="input6" name="input6" type="file" class="file-loading" data-allowed-file-extensions='["bmp", "png", "jpg"]'>-->
                                    </center>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-9">
                    {!! Form::label('endereco', trans('mensagens.endereco')) !!}
                    {!! Form::text('endereco', null, ['class'=>'form-control input-sm', 'maxlength' =>'100', 'id'=>'endereco'] ) !!}
                </div>
                <div class="form-group col-sm-3">
                    {!! Form::label('complemento', trans('mensagens.complemento')) !!}
                    {!! Form::text('complemento', null, ['class'=>'form-control input-sm', 'maxlength' =>'20', 'id'=>'complemento'] ) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('bairro', trans('mensagens.bairro')) !!}
                    {!! Form::text('bairro', null, ['class'=>'form-control input-sm', 'maxlength' =>'50', 'id'=>'bairro'] ) !!}
                </div>
                <div class="form-group col-sm-5">
                    {!! Form::label('cidade', trans('mensagens.cidade')) !!}
                    {!! Form::text('cidade', null, ['class'=>'form-control input-sm', 'maxlength' =>'100', 'id'=>'cidade'] ) !!}
                </div>
                <div class="form-group col-sm-1">
                    {!! Form::label('uf', trans('mensagens.uf')) !!}
                    {!! Form::text('uf', null, ['class'=>'form-control input-sm', 'maxlength' =>'2', 'id'=>'uf'] ) !!}
                </div>
                <div class="form-group col-sm-2">
                    {!! Form::label('cep', trans('mensagens.cep')) !!}
                    {!! Form::text('cep', null, ['class'=>'form-control input-sm', 'maxlength' =>'9', 'id'=>'cep'] ) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-4">
                    {!! Form::label('telefone', trans('mensagens.telefone')) !!}
                    {!! Form::text('telefone', null, ['class'=>'form-control input-sm', 'maxlength' =>'50', 'id'=>'telefone'] ) !!}
                </div>
                <div class="form-group col-sm-4">
                    {!! Form::label('celular_1', trans('mensagens.celular_1')) !!}
                    {!! Form::text('celular_1', null, ['class'=>'form-control input-sm', 'maxlength' =>'50', 'id'=>'celular_1'] ) !!}
                </div>
                <div class="form-group col-sm-4">
                    {!! Form::label('celular_2', trans('mensagens.celular_2')) !!}
                    {!! Form::text('celular_2', null, ['class'=>'form-control input-sm', 'maxlength' =>'50', 'id'=>'celular_2'] ) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-6">
                    {!! Form::label('email', trans('mensagens.email')) !!}
                    {!! Form::text('email', null, ['class'=>'form-control input-sm', 'maxlength' =>'50', 'id'=>'email'] ) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-8">
                    {!! Form::label('contato_nome', trans('mensagens.contato_nome')) !!}
                    {!! Form::text('contato_nome', null, ['class'=>'form-control input-sm', 'maxlength' =>'100', 'id'=>'contato_nome'] ) !!}
                </div>
                <div class="form-group col-sm-4">
                    {!! Form::label('contato_telefone', trans('mensagens.contato_telefone')) !!}
                    {!! Form::text('contato_telefone', null, ['class'=>'form-control input-sm', 'maxlength' =>'50', 'id'=>'contato_telefone'] ) !!}
                </div>
                <div class="form-group col-sm-6">
                    {!! Form::label('contato_email', trans('mensagens.contato_email')) !!}
                    {!! Form::text('contato_email', null, ['class'=>'form-control input-sm', 'maxlength' =>'50', 'id'=>'contato_email'] ) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-3">
                    {!! Form::label('conta_banco', trans('mensagens.conta_banco')) !!}
                    {!! Form::text('conta_banco', null, ['class'=>'form-control input-sm', 'maxlength' =>'3', 'id'=>'conta_banco'] ) !!}
                </div>
                <div class="form-group col-sm-3">
                    {!! Form::label('conta_agencia', trans('mensagens.conta_agencia')) !!}
                    {!! Form::text('conta_agencia', null, ['class'=>'form-control input-sm', 'maxlength' =>'4', 'id'=>'conta_agencia'] ) !!}
                </div>
                <div class="form-group col-sm-3">
                    {!! Form::label('conta_corrente', trans('mensagens.conta_corrente')) !!}
                    {!! Form::text('conta_corrente', null, ['class'=>'form-control input-sm', 'maxlength' =>'15', 'id'=>'conta_corrente'] ) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-3">
                    {!! Form::label('graduacao_id', trans('mensagens.graduacao')) !!}
                    {!! Form::select('graduacao_id', $graduacao, null, ['class'=>'form-control input-sm', 'id'=>'graduacao_id'] ) !!}
                </div>
                <div class="form-group col-sm-3">
                    {!! Form::label('especialidade_id', trans('mensagens.especialidade')) !!}
                    {!! Form::select('especialidade_id', $especialidade, null, ['class'=>'form-control input-sm', 'id'=>'especialidade_id'] ) !!}
                </div>
                <div class="form-group col-sm-3">
                    {!! Form::label('situacao_id', trans('mensagens.situacao')) !!}
                    {!! Form::select('situacao_id', $situacao, null, ['class'=>'form-control input-sm', 'id'=>'situacao_id'] ) !!}
                </div>
                <div class="form-group col-sm-3">
                    {!! Form::label('forca_id', trans('mensagens.forca')) !!}
                    {!! Form::select('forca_id', $forca, null, ['class'=>'form-control input-sm', 'id'=>'forca_id'] ) !!}
                </div>
            </div>

            <div class="row">
                <div class="form-group col-sm-12">
                    {!! Form::label('observacao', trans('mensagens.observacao')) !!}
                    {!! Form::textarea('observacao', null, ['class'=>'form-control input-sm', 'id'=>'observacao'] ) !!}
                </div>
            </div>

        </div>

        <div class="panel-footer">
            <div class="row">
                <div class="col-2">
                    {!! Form::submit(trans('mensagens.salvar')   , ['class'=>'btn btn-success pull-left']) !!}
                </div>
                <div class="col-2">
                    <a href="{{ asset('praca')}}" class="btn btn-info pull-left">{!! trans('mensagens.cancelar') !!}</a>
                </div>
            </div>
        </div>
    </div>
    <br>

@section("js")
    <script type="text/javascript">
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah').attr('src', e.target.result)
                        .width(90)
                        .height(120);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#imgfoto").change(function () {
            readURL(this);
        });
    </script>
@stop
