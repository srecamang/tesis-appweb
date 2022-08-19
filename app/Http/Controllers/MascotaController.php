<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use Illuminate\Http\Request;

class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $datosM['mascotas']=Mascota::paginate(5);
        return view('mascota.index',$datosM );
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('mascota.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $campos=[
            
            'nombre_mascota'=>'required | string | max:100 ',
            'especie'=>'required | string | max:100 ',
            'raza'=>'required | string | max:100 ',
            'sexo'=>'required | string | max:100 ',
            'edad'=>'required | string | max:100 ',
            'peso'=>'required | string | max:100 ',
            'esterilizado'=>'required | string | max:1000000 ',
            'num_chip'=>'required | int | max:100 ',
            'dueño_rut_dueño'=>'required | string | max:100 '
        
        ];
        $mensaje=[
            'required'=> ' :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);
        //
        //$datosMascota = request()->all();
        $datosMascota = request()->except('_token');
        Mascota::insert($datosMascota);

        //return response()->json($datosMascota);
        return redirect('mascota')->with('mensaje','Mascota agregada con éxito');
    
    }   

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function show(Mascota $mascota)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function edit($id_mascota)
    {
        //
        $mascota=Mascota::findOrFail($id_mascota);
        return view('mascota.edit', compact('mascota'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id_mascota)
    {
        //
        $campos=[
            
            'nombre_mascota'=>'required | string | max:100 ',
            'especie'=>'required | string | max:100 ',
            'raza'=>'required | string | max:100 ',
            'sexo'=>'required | string | max:100 ',
            'edad'=>'required | string | max:100 ',
            'peso'=>'required | string | max:100 ',
            'esterilizado'=>'required | string | max:1000000 ',
            'num_chip'=>'required | int ',
            'dueño_rut_dueño'=>'required | string | max:100 ',
        
        ];
        $mensaje=[
            'required'=> ' :attribute es requerido'
        ];

        $this->validate($request, $campos, $mensaje);

        $datosMascota= request()->except(['_token','_method']);
        Mascota::where('id_mascota','=',$id_mascota)->update($datosMascota);

        $mascota=Mascota::findOrFail($id_mascota);
        //return view('mascota.edit', compact('mascota'));
        return redirect('mascota')->with('mensaje','Mascota Mofificada');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Mascota  $mascota
     * @return \Illuminate\Http\Response
     */
    public function destroy($id_mascota)
    {
        //
        Mascota::destroy($id_mascota);
        //return redirect('mascota');
        return redirect('mascota')->with('mensaje','Mascota Borrada');
    }
}
