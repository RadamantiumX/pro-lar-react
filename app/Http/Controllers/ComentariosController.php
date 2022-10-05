<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;

class ComentariosController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'celular' => 'required|min:8',
            'comentario'=>'required|max:500'
        ]);

        $comentario = new Comentario();
        $comentario->email = $request->email;
        $comentario->celular = $request->celular;
        $comentario->comentario = $request->comentario;

        $comentario->save();
        return redirect()->route('home')->with('success','Mensaje enviado!');


    }
}
