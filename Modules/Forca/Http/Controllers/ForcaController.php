<?php

namespace Modules\Forca\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Forca\Entities\Forca;

class ForcaController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        // carrega os registros
        $registros = Forca::orderBy('forca')->get();

        return view('forca::index')
            ->with('registros', $registros)
            ;
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('forca::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $input = $request->all();
        $reg = new Forca();
        $reg->create($input);

        \Session::flash('message', trans( 'mensagens.conf_inc'));
        $url = $request->get('redirect_to', asset('forca'));
        return redirect()->to($url);
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        $reg = Forca::find($id);
        return view('forca::show')
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
        $reg = Forca::find($id);
        return view('forca::edit')
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
        $reg = Forca::find($id);

        $reg->update($input);

        \Session::flash('message', trans( 'mensagens.conf_alt'));
        $url = $request->get('redirect_to', asset('forca'));
        return redirect()->to($url);
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $registro = Forca::find($id);
        $registro->delete();

        \Session::flash('message', trans( 'mensagens.conf_exc'));
        return redirect()->to(asset('forca'));
    }
}
