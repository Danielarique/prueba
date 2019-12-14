<?php

namespace Laradex\Http\Controllers;

use Laradex\Trainer;

use Illuminate\Http\Request;

use Laradex\Http\Requests\StoreTrainerRequest;

class TrainerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)

    {
        $request->user()->authorizeRoles('admin'); 
        $trainers = Trainer::all();
        return view('trainers.index',compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTrainerRequest $request)
    {   
       

        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/',$name);
        }

       // return $request->input('name');
       // return $request->all();
        $trainer = new Trainer();
        $trainer->name = $request->input('name');
        $trainer->description = $request->input('description');
        $trainer->slug = $request->input('slug');
        $trainer->avatar = $name;
        $trainer->save();
        return redirect()->route('trainer.index');
     //   return ('Guardado');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Trainer $trainer)
    {
     //   $trainer = Trainer::where('slug','=',$slug)->firstOrFail();
       // return $slug;
       // $trainer = Trainer::find($id);
        //return $trainer;
       return view('trainers.show', compact('trainer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Trainer $trainer)
    {
        //return $trainer;
        return view('trainers.edit', compact('trainer'));    
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Trainer $trainer)
    {
      /* $validateData = $request->validate([
            'name' => 'required|max:10',
            'description' => 'min:10',
            'avatar' => 'required|image',
            'slug' => 'required'

        ]);*/
        $trainer->fill($request->except('avatar'));
        if($request->hasFile('avatar')){
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $trainer->avatar= $name;
            $file->move(public_path().'/images/',$name);
        }
        $trainer->save();
       // return 'Actualizado'; 
       return redirect()->route('trainer.show', [$trainer])->with('status', 'Registro actualizado'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trainer $trainer)
    {
        $file_path = public_path().'/images/'.$trainer->avatar;
        //return $file_path; 
        \File::delete($file_path);

        $trainer->delete();
          return redirect()->route('trainer.index'); 
    }
}
