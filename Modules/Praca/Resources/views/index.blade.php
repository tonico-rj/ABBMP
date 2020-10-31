@extends('adminlte::page')

@section('title', 'Praças')
@section ( 'plugins.Datatables' , true )

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4>{!! trans('mensagens.pracas') !!}</h4>
        </div>
        <div class="box-body">
            <table class='table table-striped' id="tbl_">
                <thead>
                <tr>
                    <th>#</th>
                    <th>{!! trans("mensagens.praca") !!}</th>
                    <th>{!! trans("mensagens.cpf") !!}</th>
                    <th>{!! trans("mensagens.nip") !!}</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($registros as $reg)
                    <tr>
                        {!! Form::open(['route' => [ 'praca.destroy' ,'praca' => $reg->praca_id]
                                , 'method' =>'DELETE'
                                , 'id' => "delete-form-{$reg->praca_id}"
                                , 'style' => 'display:none'
                                ]) !!}
                        {!! Form::close() !!}
                        <td>{{$reg->praca_id}}</td>
                        <td>{{$reg->nome}}</td>
                        <td>{!! $reg->cpf !!}</td>
                        <td>{!! $reg->nip !!}</td>
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
                            location.href = "{!! asset('praca/create') !!}";
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
                                url = '{{ asset('praca')  }}/' + id + '/edit';
                                location.href = url;
                            }
                        }
                    },
                    {
                        "className": "{!! trans('botoes.btn_excluir')!!}",
                        "titleAttr": "{!! trans('mensagens.exclusao')!!}",
                        "action": function (e, dt, node, config) {
                            alert("Rotina ainda não implementada!");
                            /*
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
                                    message: "{!! trans('mensagens.exc_examelab') !!}" + _descr + "?",
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
                            */
                        }
                    },
                    {
                        "className": "{!! trans('botoes.btn_imprimir')!!}",
                        "titleAttr": "{!! trans('mensagens.imprimir')!!}",
                        "action": function (e, dt, node, config) {
                            alert("Rotina ainda não implementada!");
                            /*
                            dados = $('#tbl_').DataTable().row('.selected').data();
                            if (dados == null) {
                                bootbox.alert("{!! trans('mensagens.sSelecione') !!}");
                            }
                            else {
                                // pega o código
                                id = dados[0];
                                url = '{{ asset('praca/imprimir')  }}/' + id;
                                window.open(url, '_blank');
                            }
                            */
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
