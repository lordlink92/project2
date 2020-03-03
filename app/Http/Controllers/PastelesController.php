<?php

namespace App\Http\Controllers;
use App\Pastel;

use Illuminate\Http\Request;

class PastelesController extends Controller
{

    public function index()
    {

        $pasteles = Pastel::all();

        return view('pasteles.index', ['pasteles' => $pasteles],);
    }

    public function show($id){
//dd(Pastel::all());
        $a= Pastel::find($id);
       // dd(Pastel::find($id));
       // dd($a);
        $b=$a->id;
        $c=$a->titulo;
        return view('pasteles.show',['id' => $b],['titulo' => $c]);

    }
    public function crear(){


        return view('pasteles.crear');

    }

    public function store(Request $request){
        //$data = request()->all();

        // Article::create([
        //     'titulo' => $data['titulo'],
        //     'ingredientes'  => $data['ingredientes'],
        //     'preparacion'   => $data['preparacion']
        // ]);

        $validateData = $request->validate([
            'titulo' => 'required',
            'ingredientes' => 'required|max:20',
            'preparacion'  => 'required'
        ]);



        $pastel = new Pastel;
        $pastel->titulo = $request->titulo;
        $pastel->ingredientes = $request->ingredientes;
        $pastel->preparacion = $request->preparacion;

        $pastel->save();


        //return redirect()->route('todos_pastels');
        return redirect('/pasteles');
    }
}
