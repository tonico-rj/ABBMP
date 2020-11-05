<?php

namespace Modules\Praca\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Especialidade\Entities\Especialidade;
use Modules\Forca\Entities\Forca;
use Modules\Graduacao\Entities\Graduacao;
use Modules\Praca\Entities\Praca;
use Modules\Situacao\Entities\Situacao;
use Modules\TipoMembro\Entities\TipoMembro;

class PracaController extends Controller
{
    private $foto_padrao = 'imagens/foto.png';

    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $pracas = Praca::query()
            ->orderBy('nome', 'ASC')
            ->get();

        $titulos = array( '#',
            'Pracas',
            'NIP',
            'CPF'
        );

        return view('praca::index')
            ->with('registros', $pracas)
            ->with('titulos', $titulos)
            ;
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        $tipomembro = TipoMembro::orderBy('tipo_membro', 'asc')->pluck('tipo_membro', 'tipo_membro_id')->prepend(trans('mensagens.selecione_opcao'), '');
        $graduacao  = Graduacao::orderBy('graduacao', 'asc')->pluck('graduacao', 'graduacao_id')->prepend(trans('mensagens.selecione_opcao'), '');
        $especialidade  = Especialidade::orderBy('especialidade', 'asc')->pluck('especialidade', 'especialidade_id')->prepend(trans('mensagens.selecione_opcao'), '');
        $situacao  = Situacao::orderBy('situacao', 'asc')->pluck('situacao', 'situacao_id')->prepend(trans('mensagens.selecione_opcao'), '');
        $forca  = Forca::orderBy('forca', 'asc')->pluck('forca', 'forca_id')->prepend(trans('mensagens.selecione_opcao'), '');

        return view('praca::create')
            ->with('foto', $this->foto_padrao)
            ->with('tipomembro', $tipomembro)
            ->with('graduacao', $graduacao)
            ->with('especialidade', $especialidade)
            ->with('situacao', $situacao)
            ->with('forca', $forca)
            ;
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $praca = new Praca();
        $praca->create($input);

        \Session::flash('message', trans( 'mensagens.conf_inc'));
        $url = $request->get('redirect_to', asset('praca'));
        return redirect()->to($url);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $praca = Praca::find($id);

        $tipomembro = TipoMembro::orderBy('tipo_membro', 'asc')->pluck('tipo_membro', 'tipo_membro_id')->prepend(trans('mensagens.selecione_opcao'), '');
        $graduacao  = Graduacao::orderBy('graduacao', 'asc')->pluck('graduacao', 'graduacao_id')->prepend(trans('mensagens.selecione_opcao'), '');
        $especialidade  = Especialidade::orderBy('especialidade', 'asc')->pluck('especialidade', 'especialidade_id')->prepend(trans('mensagens.selecione_opcao'), '');
        $situacao  = Situacao::orderBy('situacao', 'asc')->pluck('situacao', 'situacao_id')->prepend(trans('mensagens.selecione_opcao'), '');
        $forca  = Forca::orderBy('forca', 'asc')->pluck('forca', 'forca_id')->prepend(trans('mensagens.selecione_opcao'), '');

        return view('praca::show')
            ->with('praca', $praca)
            ->with('foto', $this->foto_padrao)
            ->with('tipomembro', $tipomembro)
            ->with('graduacao', $graduacao)
            ->with('especialidade', $especialidade)
            ->with('situacao', $situacao)
            ->with('forca', $forca)
            ;
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $praca = Praca::find($id);

        $tipomembro = TipoMembro::orderBy('tipo_membro', 'asc')->pluck('tipo_membro', 'tipo_membro_id')->prepend(trans('mensagens.selecione_opcao'), '');
        $graduacao  = Graduacao::orderBy('graduacao', 'asc')->pluck('graduacao', 'graduacao_id')->prepend(trans('mensagens.selecione_opcao'), '');
        $especialidade  = Especialidade::orderBy('especialidade', 'asc')->pluck('especialidade', 'especialidade_id')->prepend(trans('mensagens.selecione_opcao'), '');
        $situacao  = Situacao::orderBy('situacao', 'asc')->pluck('situacao', 'situacao_id')->prepend(trans('mensagens.selecione_opcao'), '');
        $forca  = Forca::orderBy('forca', 'asc')->pluck('forca', 'forca_id')->prepend(trans('mensagens.selecione_opcao'), '');

        return view('praca::edit')
            ->with('praca', $praca)
            ->with('foto', $this->foto_padrao)
            ->with('tipomembro', $tipomembro)
            ->with('graduacao', $graduacao)
            ->with('especialidade', $especialidade)
            ->with('situacao', $situacao)
            ->with('forca', $forca)
            ;
     }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        $input = $request->all();
        $praca = Praca::find($id);

        $praca->update($input);

        \Session::flash('message', trans( 'mensagens.conf_alt'));
        $url = $request->get('redirect_to', asset('praca'));
        return redirect()->to($url);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
    }
}
