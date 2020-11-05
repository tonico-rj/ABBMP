    <div class="panel">
        <div class="panel-body">
            <div class="row">
                <div class="col-10">
                    {!! Form::label('graduacao', trans('mensagens.graduacao')) !!}
                    {!! Form::text('graduacao', null, ['class'=>'form-control input-sm', 'id'=>'graduacao'] ) !!}
                </div>
            </div>
        </div>
        <br/>
        <div class="panel-footer">
            <div class="row">
                <div class="col-2">
                    {!! Form::submit(trans('mensagens.salvar')   , ['class'=>'btn btn-success pull-left']) !!}
                </div>
                <div class="col-2">
                    <a href="{{ asset('graduacao')}}" class="btn btn-info pull-left">{!! trans('mensagens.cancelar') !!}</a>
                </div>
            </div>
        </div>
    </div>
    <br>

