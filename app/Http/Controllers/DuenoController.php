<?php

namespace App\Http\Controllers;

use App\Models\Dueno;
use Illuminate\Http\Request;

class DuenoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datos['duenos']=Dueno::paginate(5);
        return view('dueno.index',$datos );

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dueno.create');
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
        $campos=[
            
            'rut_dueño'=>'required | string | max:100 ',
            'nombre_dueño'=>'required | string | max:100 ',
            'fecha_nacimiento'=>'required | date ',
            'direccion'=>'required | string | max:100 ',
            'correo'=>'required | email',
            'telefono'=>'required | int ',
        
        ];
        $mensaje=[
            'required'=> ' :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);
        //
        //$datosMascota = request()->all();
        $datosDueno = request()->except('_token');
        Dueno::insert($datosDueno);

        //return response()->json($datosMascota);
        return redirect('dueno')->with('mensaje','Dueño agregado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dueno  $dueno
     * @return \Illuminate\Http\Response
     */
    public function show(Dueno $dueno)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dueno  $dueno
     * @return \Illuminate\Http\Response
     */
    public function edit($rut_dueño)
    {
        //
        $dueno=Dueno::findOrFail($rut_dueño);
        return view('dueno.edit', compact('dueno'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dueno  $dueno
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dueno $dueno)
    {
        //
        $campos=[
            
            'rut_dueño'=>'required | string | max:100 ',
            'nombre_dueño'=>'required | string | max:100 ',
            'fecha_nacimiento'=>'required | date ',
            'direccion'=>'required | string | max:100 ',
            'correo'=>'required | email',
            'telefono'=>'required | int '
        
        ];
        $mensaje=[
            'required'=> ' :attribute es requerido'
        ];
        $this->validate($request, $campos, $mensaje);

        $datosDueno= request()->except(['_token','_method']);
        Mascota::where('rut_dueño','=',$rut_dueño)->update($datosDueno);

        $mascota=Mascota::findOrFail($rut_dueño);
        //return view('mascota.edit', compact('mascota'));
        return redirect('dueno')->with('mensaje','Dueño Mofificado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dueno  $dueno
     * @return \Illuminate\Http\Response
     */

    public function destroy($rut_dueño)
    {
        //
        Dueno::destroy($rut_dueño);
        //return redirect('mascota');
        return redirect('dueno')->with('mensaje','Dueño Borrado');
        

        



    }



}
