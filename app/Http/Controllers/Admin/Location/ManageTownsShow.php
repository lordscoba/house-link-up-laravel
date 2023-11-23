<?php

namespace App\Http\Controllers\Admin\Location;

use App\Http\Controllers\Controller;
use App\Models\Lgas;
use Illuminate\Http\Request;

class ManageTownsShow extends Controller
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

        public function show($lga_id, $state_id)
    {
        // return view('admin.town.index', [
        //     'lgas' => Lgas::findOrFail($lga_id),
        //     'state_id' => $state_id,
        // ]);

         return view('admin.town.index');
    }
}