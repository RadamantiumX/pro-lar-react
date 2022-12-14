<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Comentario;

use Illuminate\Support\Facades\DB;

class ComentariosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'celular' => 'required|min:8',
            'comentario'=>'required|max:500'
        ]);

        $match = $request->input('email');

        $compare = DB::table('comentarios')->where('email', $match)->exists();

        if (!$compare){


        $comentario = new Comentario();
        $comentario->email = $request->email;
        $comentario->celular = $request->celular;
        $comentario->comentario = $request->comentario;

        $comentario->save();
        return redirect()->route('home')->with('success','Mensaje enviado!');
      }else{
          return redirect()->route('home')->with('error','El email asociado ya se encuentra con una solicitud pendiente');
      }

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
