@extends('adminlte::page')

@section('title', 'Graduação')
@section ( 'plugins.Datatables' , true )
@section ( 'plugins.Bootboxjs' , true )


@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>{!! trans('mensagens.graduacao') !!}</h4>
        </div>
        <div class="box-body">
            <table class='table table-striped' id="tbl_">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>{!! trans("mensagens.graduacao") !!}</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($registros as $reg)
                    <tr>
                        {!! Form::open(['route' => [ 'graduacao.destroy', 'graduacao' => $reg->graduacao_id]
                                , 'method' =>'DELETE'
                                , 'id' => "delete-form-{$reg->graduacao_id}"
                                , 'style' => 'display:none'
                                ]) !!}
                        {!! Form::close() !!}
                        <td>{{$reg->graduacao_id}}</td>
                        <td>{{$reg->graduacao}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section("js")
    <script>
        $(document).ready(function () {
            $('#tbl_').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": true,
                "order": [[ 1, 'asc' ]],
                "ordering": true,
                "info": false,
                "autoWidth": true,
                "select": true,
                "columnDefs": [
                    {"targets": [0], "visible": false }
                ],
                dom: 'Bfrtip',
                buttons: [
                    {
                        "className": "{!! trans('botoes.btn_incluir')!!}",
                        "titleAttr": "{!! trans('mensagens.inclusao')!!}",
                        "action": function (e, dt, node, config) {
                            location.href = "{!! asset('graduacao/create') !!}";
                        }
                    },
                    {
                        "className": "{!! trans('botoes.btn_alterar')!!}",
                        "titleAttr": "{!! trans('mensagens.alteracao')!!}",
                        "action": function (e, dt, node, config) {
                            //dados = $('#tbl_').row('.selected').data();
                            dados = $('#tbl_').DataTable().row('.selected').data();
                            if (dados == null) {
                                bootbox.alert("{!! trans('mensagens.sSelecione') !!}");
                            }
                            else {
                                // pega o código
                                id = dados[0];
                                url = '{{ asset('graduacao')  }}/' + id + '/edit';
                                location.href = url;
                            }
                        }
                    },
                    {
                        "className": "{!! trans('botoes.btn_excluir')!!}",
                        "titleAttr": "{!! trans('mensagens.exclusao')!!}",
                        "action": function (e, dt, node, config) {
                            dados = $('#tbl_').DataTable().row('.selected').data();
                            if (dados == null) {
                                bootbox.alert("{!! trans('mensagens.sSelecione') !!}");
                            }
                            else {
                                var _descr = dados[1];
                                var _id = dados[0];
                                var _nome = '#delete-form-' + _id;
                                //alert(_nome);

                                bootbox.dialog({
                                    title: "{!! trans('mensagens.exclusao') !!}",
                                    message: "{!! trans('mensagens.exc_especialidade') !!}" + _descr + "?",
                                    buttons: {
                                        yes: {
                                            label: "Sim",
                                            className: "btn-danger",
                                            callback: function () {
                                                $(_nome).submit();
                                            }
                                        },
                                        no: {
                                            label: "Não",
                                            className: "btn-default"
                                        }
                                    }
                                });
                            }
                        }
                    }
                ],
                "language": {
                    "sLengthMenu": "{!!  trans('mensagens.sLengthMenu') !!}",
                    "sZeroRecords": "{!!  trans('mensagens.sZeroRecords') !!}",
                    "sInfo": "{!!  trans('mensagens.sInfo') !!}",
                    "sInfoEmpty": "{!!  trans('mensagens.sInfoEmpty') !!}",
                    "sInfoFiltered": "{!!  trans('mensagens.sInfoFiltered') !!}",
                    "sSearch": "",
                    "oPaginate": {
                        "sFirst": "{!!  trans('mensagens.sFirst') !!}",
                        "sPrevious": "{!!  trans('mensagens.sPrevious') !!}",
                        "sNext": "{!!  trans('mensagens.sNext') !!}",
                        "sLast": "{!!  trans('mensagens.sLast') !!}"
                    }
                }
            });

            $('.dataTables_filter input').addClass('form-control pull-right');
            $('.dataTables_filter input').attr('placeholder', "{!! trans('mensagens.pesquisa') !!}");
            $('.dataTables_filter').addClass('pull-right');
        });
    </script>
@endsection
