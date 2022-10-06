<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use Illuminate\Support\Facades\DB;

class ComentariosController extends Controller
{
    public function store(Request $request)
    {


        $request->validate([
            'email' => 'required',
            'celular' => 'required|min:8',
            'comentario'=>'required|max:500'
        ]);

        $emailValidate = $request->input('email');

        $verify = DB::table('comentarios')->where('email', $emailValidate)->exists();

        if(!$verify)
        {
        $comentario = new Comentario();
        $comentario->email = $request->email;
        $comentario->celular = $request->celular;
        $comentario->comentario = $request->comentario;

        $comentario->save();
        return redirect()->route('home')->with('success','Mensaje enviado!');
        }else{
            return redirect()->route('home')
            ->with('error','El email ingresado ya ha creado una solicitud');
        }

    }

    public function closeForm()
    {

    }
}
