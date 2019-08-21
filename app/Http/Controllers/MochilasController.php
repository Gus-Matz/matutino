<?php

namespace App\Http\Controllers;
use App\Mochila;
use App\Genero;
use App\Marca;
use App\Color;
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
        //Este metodo manda a llamar al modelo "Mochila" con los datos almacenados en la base de datos
        // y los guarda en la variable "$mochilas" y los ordena de forma descendente
        $mochilas=Mochila::with(['marca','genero','color'])->orderBy('id','ASC')->paginate(5);
        //dd($mochilas);
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
        $marcas=Marca::orderBy('nombre','ASC')->select('nombre','id')->get();
        $generos=Genero::orderBy('nombre','ASC')->select('nombre','id')->get();
        $colores=Color::orderBy('nombre','ASC')->select('nombre','id')->get();
        //dd($marcas);
        //dump($generos,$marcas,$colores);
        return view('Mochila.create')->with('marcas',$marcas)->with('generos',$generos)->with('colores',$colores);
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
        $this->validate($request,[ 'modelo'=>'required', 'marca_id'=>'required', 'genero_id'=>'required', 'color_id'=>'required', 'precio'=>'required']);
        Mochila::create($request->all());
        return redirect()->to('principal')->with('success','Registro creado satisfactoriamente');
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
        $mochila=Mochila::find($id);
        //dd($mochila);
        return view('mochila.show')->with('mochila',$mochila);
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
        $mochila=Mochila::find($id);
        return view('mochila.edit')->with('mochila',$mochila);
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
        //dd($id);

        $this->validate($request,[ 'modelo'=>'required', 'marca'=>'required', 'genero'=>'required', 'color'=>'required', 'precio'=>'required']);
        Mochila::find($id)->update($request->all());
        return redirect()->to('principal')->with('success','Registro actualizado satisfactoriamente');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //dd($request->id);
        Mochila::find($request->id)->delete();
        return redirect()->to('principal')->with('success','Registro eliminado satisfactoriamente');
    }
}
