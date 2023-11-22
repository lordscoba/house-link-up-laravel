<?php

namespace App\Http\Controllers\Admin\Location;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Location;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Response;
// use Illuminate\Contracts\View\Factory|Illuminate\Contracts\View\View;

class LocationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
        public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        //  $locations = Location::all();
         $locations = Location::paginate(5);

        // dd($locations);
        return view('admin.location.index', [
            'locations' => $locations
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.location.create');
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
            'state' => 'required|unique:locations',
        ]);

        $locations = Location::create([
            'state' => $request->input('state'),
        ]);

        // return view('admin.location.create');
        return redirect('/admin/location');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('admin.location.show', [
            'locations' => Location::findOrFail($id),
        ]);
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
        // return view('admin.location.edit');

        $locations = Location::findOrFail($id);
        return view('admin.location.edit')->with('locations', $locations);
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
            'state' => 'required|unique:locations',
        ]);

        $locations = Location::where('id', $id)->update([
            'state' => $request->input('state')
        ]);
        return redirect('/admin/location');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Location $location)
    {
            // $location->delete();
            // return view('admin.location.destroy');
        $location->delete();
        return redirect()->route('location.index')
        ->withSuccess(__('Location delete successfully.'));
    }
}