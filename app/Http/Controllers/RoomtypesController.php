<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Roomtype;
class RoomtypesController extends Controller
{
    //
    public function index(){
        $roomtypes = Roomtype::all();
        return view('roomtype.home', compact('roomtypes'));

    }

    public function show($id){
        $roomtype = Roomtype::find($id);

        return view('roomtype.update', compact('roomtype'));
    }

    public function create(){
        return view('roomtype.create');
    }

    public function store(){

        $this->validate(request(),[
            'name' => 'required',
            'persons' => 'required',
            'dog' => 'required'
        ]);
        $roomtype = new Roomtype;

        $roomtype->name = request('name');
        $roomtype->persons = request('persons');
        $roomtype->dog = request('dog');

        $roomtype->save();

        return redirect('/');
    }
    public function edit($id){
        $roomtype = roomtype::find($id);
        return view('roomtype.edit', compact('roomtype'));
    }
    public function update($id){

        $this->validate(request(),[
            'name' => 'required',
            'persons' => 'required',
            'dog' => 'required'
        ]);
        $roomtype = Roomtype::find($id);

        $roomtype->name = request('name');
        $roomtype->persons = request('persons');
        $roomtype->dog = request('dog');

        $roomtype->save();

        return redirect('/');

    }
    public function delete($id){
        $roomtype = Roomtype::find($id);

        $roomtype->delete();
        return redirect('/');
    }
}
