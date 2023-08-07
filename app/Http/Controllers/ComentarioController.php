<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comentario;
use App\Models\User;
use App\Models\Post;

class ComentarioController extends Controller
{
    public function store(Request $request, User $user, Post $post)
    {
        //  []

        //--- validar comentario 

        $this->validate($request, [
            'comentario' => 'required|max:255'
        ]);

        //------------- guardar comentario

        Comentario::create([
            'user_id' => auth()->user()->id,
            'post_id' => $post->id,
            'comentario' => $request->comentario
        ]);

        return back()->with('mensaje', 'Comentario enviado correctamente');
    }
}
