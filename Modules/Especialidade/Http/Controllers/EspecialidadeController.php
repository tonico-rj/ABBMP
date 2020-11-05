<?php

namespace Modules\Especialidade\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Especialidade\Entities\Especialidade;

class EspecialidadeController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // carrega os registros
        $registros = Especialidade::orderBy('especialidade')->get();

        return view('especialidade::index')
            ->with('registros', $registros)
            ;
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('especialidade::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $reg = new Especialidade();
        $reg->create($input);

        \Session::flash('message', trans( 'mensagens.conf_inc'));
        $url = $request->get('redirect_to', asset('especialidade'));
        return redirect()->to($url);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $reg = Especialidade::find($id);
        return view('especialidade::show')
            ->with('reg', $reg)
            ;
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        $reg = Especialidade::find($id);
        return view('especialidade::edit')
            ->with('reg', $reg)
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
        $reg = Especialidade::find($id);

        $reg->update($input);

        \Session::flash('message', trans( 'mensagens.conf_alt'));
        $url = $request->get('redirect_to', asset('especialidade'));
        return redirect()->to($url);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $registro = Especialidade::find($id);
        $registro->delete();

        \Session::flash('message', trans( 'mensagens.conf_exc'));
        return redirect()->to(asset('especialidade'));
    }
}
