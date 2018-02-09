<?php

namespace App\Http\Controllers;
//namespace App\Http\Controllers\Auth;

use App\Reservation;
use App\Roomtype;
use App\User;
use Auth;
use Illuminate\Http\Request;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $reservation = Reservation::all();

        return view('reservation.home', compact('reservation'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $roomtype = Roomtype::all();
        //$query = Roomtype::find('dog', 1);
        //$roomtypeDoggo = Roomtype::scopedog($query)->get();
        return view('reservation.create', compact('roomtype'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        //
        $uid = User::all();
        //echo gettype(Auth::user()->id);
        $this->validate(request(),[
            'firstname' => 'required',
            'lastname' => 'required',
            'number' => 'required',
            'roomtype' => 'required',
            'start' => 'required',
            'end' => 'required',
            'persons' => 'required',
            'dog' => 'required',
        ]);
        $reservation = new Reservation;

        $reservation->firstname = request('firstname');
        $reservation->lastname = request('lastname');
        $reservation->number = request('number');
        $reservation->roomtype = request('roomtype');
        $reservation->start = request('start');
        $reservation->end = request('end');
        $reservation->persons = request('persons');
        $reservation->dog = request('dog');
        $reservation->user_id = auth()->user()->id;


        $reservation->save();

        return redirect('reservation');
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
        $reservation = Reservation::find($id);


        return view('reservation.show',compact('reservation'));
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
        $reservation = Reservation::find($id);
        $roomtype = Roomtype::all();
        return view('reservation.edit', compact('reservation', 'roomtype'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        //
        $this->validate(request(),[
            'firstname' => 'required',
            'lastname' => 'required',
            'number' => 'required',
            'roomtype' => 'required',
            'start' => 'required',
            'end' => 'required',
            'persons' => 'required',

        ]);
        $reservation = Reservation::find($id);

        $reservation->firstname = request('firstname');
        $reservation->lastname = request('lastname');
        $reservation->number = request('number');
        $reservation->roomtype = request('roomtype');
        $reservation->start = request('start');
        $reservation->end = request('end');
        $reservation->persons = request('persons');
        $reservation->dog = request('dog');
        $reservation->save();

        return redirect('reservation');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $reservation = Reservation::find($id);

        $reservation->delete();
        return redirect('/');
    }
}
