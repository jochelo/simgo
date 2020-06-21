<?php

namespace App\Http\Controllers;

use App\Ufv;
use Illuminate\Http\Request;

class UfvController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('getUfvs');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ufvs = Ufv::orderBy('ufv_fecha', 'desc')->paginate(10);
        return view('ufv/ufv-index', compact('ufvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ufv/ufv-create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validator($request);
        $datos = $request->all();
        Ufv::create($datos);
        return redirect('/ufvs');
    }

    protected function validator(Request $request)
    {
        return $request->validate([
            'ufv_fecha' => ['required', 'unique:ufvs'],
            'ufv_valor' => ['required', 'min:1', 'max:10'],
            'dolar_valor' => ['required', 'min:1', 'max:10'],
            'euro_valor' => ['required', 'min:1', 'max:10'],
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ufv = Ufv::find($id);
        return view('ufv/ufv-edit',compact('ufv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        dd($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $ufv = Ufv::find($id);
        $ufv->delete();
        return redirect('ufvs/');
    }

    public function getUfvs()
    {
        $fechaIni = \request()->input('fecha_ini');
        $fechaFin = \request()->input('fecha_fin');
        //dd($fechaIni);
        $ufvs = Ufv::whereBetween('ufv_fecha', [$fechaIni, $fechaFin])->get();
        return response()->json($ufvs, 200);
    }
}
