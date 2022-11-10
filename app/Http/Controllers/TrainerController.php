<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Trainer;
use Barryvdh\DomPDF\Facade\Pdf as PDF;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function pdf()
    {
        $trainers=Trainer::all();
        $pdf = PDF::loadView('pdf.listado',compact('trainers'));

        return $pdf->download('listado.pdf');
    }

    public function index()
    {
        $trainers=Trainer::all();
        return view('index',compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trainer = new Trainer();
        $trainer->name=$request->input('name');
        $trainer->apellido=$request->input('apellido');
        $trainer->avatar=$request->input('avatar');
        //return $request->input('name');
        //return $request->all();
        //$trainer = new Trainer();
       // $trainer->name=$request->input('name');
        //$trainer->apellido=$request->input('apellido');
        //$trainer->avatar=$request->input('avatar');

        $trainer->save();
        return 'Guardado ';
        }
        

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //return 'tengo que regresar el id';
        $trainer = Trainer::find($id);
       // return $trainer;
        //return view("show");
        return view('show',compact('trainer'));
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        return view('edit',compact('trainer'));
        //return $trainer;
        //return $request;
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Trainer $trainer)
    {
        //return $trainer;
        //return $request;
        $trainer->fill($request->all());
        $trainer->save();
        return "update";
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
        $trainer= Trainer::find($id);
        if ($trainer->delete($id))
        {
            return redirect('trainers/');
        }
        else return 'El '.$id. "No se pudo borrar";
            
        }
        
    }

