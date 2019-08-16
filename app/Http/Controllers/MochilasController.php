<?php

namespace App\Http\Controllers;
use App\Mochila;
use Illuminate\Http\Request;

class MochilasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Este metodo manda a llamar al modelo "Empleado" con los datos almacenados en la base de datos
        // y los guarda en la variable "$empleados" y los ordena de forma descendente
        $mochilas=Mochila::orderBy('id','ASC')->paginate(3);
        return view('Mochila.index',compact('mochilas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //muestra el formulario creado diseñado en el index, utilizando el modelo Mochila
        return view('Mochila.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $this->validate($request,[ 'modelo'=>'required', 'marca'=>'required', 'genero'=>'required', 'color'=>'required', 'precio'=>'required']);
        Empleado::create($request->all());
        return redirect()->to('existencia')->with('success','Registro creado satisfactoriamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
