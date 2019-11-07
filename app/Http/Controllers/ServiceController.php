<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $services = Service::latest()->paginate(5);

      return view('services.index',compact('servies'))
          ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('services.create');
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
      'type' => ['required', 'string', 'max:255'],
      'amount' => ['required', 'decimal'],
      'booking_date' => ['required', 'date'],
      ]);

      Service::create($request->all());

      return redirect()->route('services.index')
                      ->with('success','Service has been created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('services.show',compact('services'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('services.edit',compact('services'));
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
      $request->validate([
      'type' => ['required', 'string', 'max:255'],
      'amount' => ['required', 'decimal'],
      'booking_date' => ['required', 'date'],
      ]);

      $id->update($request->all());

      return redirect()->route('services.index')
                      ->with('success','Service has been updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $id->delete();

      return redirect()->route('services.index')
                      ->with('success','Service has been deleted successfully');
    }
}
